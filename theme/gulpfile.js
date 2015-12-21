/*----------------------------------------------------------------------------
  Gulpfile.js
---------------------------------------

Available Tasks:
  - gulp
  - build
  - watch
  - sass
  - browser-sync
  - scripts
  - images
  - clean
  - clean:dist


Plugins
  gulp              : The streaming build system
  gulp-sass         : Compiles SASS/SCSS
  browser-sync      : Live CSS reload & browser syncing
  gulp-concat       : Concatenate files
  gulp-uglify       : Minify JS files
  gulp-if           : Conditionally run Gulp tasks
  gulp-minify-css   : Minify CSS files
  gulp-imagemin     : Optimize JPG/JPEG/GIF/PNG/SVG files
  imagemin-pngquant : PNG optimization helper
  gulp-cache        : Manage the Gulp cache
  del               : Easily delete files/folders
  run-sequence      : Run Gulp tasks in a specified order
  gulp-plumber      : Prevent pipe breaking and errors
  gulp-autoprefixer : Automatically add CSS3 vendor prefixes
  gulp-sourcemaps   : Create sourcemaps for CSS/JS
  gulp-newer        : Only modify new files
  gulp-csso         : Minify CSS
  gulp-uncss        : Remove unused CSS
  gulp-csslint      : Check CSS for errors
  gulp-rename       : Rename files
  gulp-jshint       : Check JS for errors
  jshint-stylish    : Pretty error reporting in the CLI
  gulp-zip          : Zip a directory
  vinyl-paths       : Get file paths within a stream
  gulp-util         : Adds basic utilities to plugins

----------------------------------------------------------------------------*/

/*----------------------------------------------------------------------------
  # Set Up
----------------------------------------------------------------------------*/
var gulp         = require( 'gulp' ),
    sass         = require( 'gulp-sass' ),
    browserSync  = require( 'browser-sync' ),
    concat       = require( 'gulp-concat' ),
    uglify       = require( 'gulp-uglify' ),
    gulpIf       = require( 'gulp-if' ),
    minifyCSS    = require( 'gulp-minify-css' ),
    imageMin     = require( 'gulp-imagemin' ),
    pngQuant     = require( 'imagemin-pngquant' ),
    cache        = require( 'gulp-cached' ),
    del          = require( 'del' ),
    plumber      = require( 'gulp-plumber' ),
    autoprefixer = require( 'gulp-autoprefixer' ),
    sourcemaps   = require( 'gulp-sourcemaps' ),
    csso         = require( 'gulp-csso' ),
    uncss        = require( 'gulp-uncss' ),
    csslint      = require( 'gulp-csslint' ),
    rename       = require( 'gulp-rename' ),
    jshint       = require( 'gulp-jshint' ),
    zip          = require( 'gulp-zip' ),
    vinylPaths   = require( 'vinyl-paths' ),
    notify       = require( 'gulp-notify' ),
    gutil        = require( 'gulp-util' );

/*----------------------------------------------------------------------------
  # Options
----------------------------------------------------------------------------*/
/**
 * Define the options for installed plug-ins.
 *
 * Use this in the proper tasks to implement.
 *
 * @type {Object}
 */
var options = {
  sass: {
    indentType: 'space',
    indentWidth: 2,
    outputStyle: 'expanded',
    precision: 10,
    sourceComments: true,
  }
};
/**
 * Define the source location or files for PHP
 *
 * @type {Array}
 */
var phpSources = ['src/**/*.php'];

/**
 * Define the source location or files for HTML
 *
 * @type {Array}
 */
var htmlSources = ['src/*.html'];

/**
 * Define the source location or files for SASS
 *
 * @type {Array}
 */
var sassSources = ['src/assets/scss/theme.scss'];

/**
 * Define the source location or files for JS
 *
 * @type {Array}
 */
var jsSources = ['src/assets/js/**/*.js', '!src/assets/js/plugins/**/*.js', '!src/assets/js/vendor/**/*.js'];

/**
 * Define the source files for JS concatenation
 *
 * @type {Array}
 */
var jsConcat = [
  'dist/assets/js/vendor/*.js',
  'dist/assets/js/plugins/*.js',
  'dist/assets/js/*.js',
  '!dist/assets/js/*.min.js'
];

/**
 * Define the source location or files for image compression
 *
 * @type {Array}
 */
var imageSources = ['dist/assets/img/**/*'];

/**
 * Define the source of files that should be copied into the production folder
 *
 * @type {Array}
 */
var copySources = [
  'src/**/*',
  '!src/assets/scss/',
  '!src/assets/scss/**/*'
];

/**
 * Define the source of CSS files to be minified
 *
 * @type {Array}
 */
var cssMin = ['dist/style.css'];

/*----------------------------------------------------------------------------
  # Development Tasks
----------------------------------------------------------------------------*/

/**
 * Compile SASS/SCSS files into CSS
 *
 * @param  {sourcemaps}   Create a sourcemap of the generated file
 * @param  {plumber}      Ensure the task wont abort on an error
 * @param  {sass}         Compile source files into CSS
 * @param  {csslint}      Check generated CSS for errors and syntax standards
 * @param  {autoprefixer} Create vendor prefixes from generated CSS
 * @param  {browerSync}   Inject the new CSS into the browser
 *
 * @return {CSS}          Compiled CSS file
 */
gulp.task( 'sass', function() {
  return gulp.src( sassSources )
    .pipe(cache('sassy'))
    .pipe( sourcemaps.init() )
    .pipe( plumber() )
    .pipe( sass.sync( options.sass )
      .on( 'error', sass.logError ) )
    // .pipe( csslint() )
    // .pipe( csslint.reporter( 'text' ) )
    // .pipe( csslint.reporter( 'fail' ) )
    .pipe( autoprefixer( {
      browsers: [ 'last 2 versions', 'ie >= 9', 'and_chr >= 2.3' ]
    } ) )
    .pipe( sourcemaps.write() )
    .pipe( gulp.dest( 'src/assets/css/' ) )
    .pipe( browserSync.reload( {
      stream: true
    } ) );
} );

// Lint JS
gulp.task( 'lint', function() {
  return gulp.src( jsSources )
    .pipe(cache('linting'))
    .pipe( sourcemaps.init() )
    .pipe( plumber() )
    .pipe( jshint() )
    .pipe( jshint.reporter( 'jshint-stylish' ) )
    .pipe( jshint.reporter( 'fail' ) )
    .pipe( sourcemaps.write() )
    .pipe( browserSync.reload( {
      stream: true
    } ) );
} );

// Launch a development server
gulp.task( 'serve', function() {
  browserSync.init( {
    proxy: "phx-staff:8888"
      // port: 3000
  } );
} );


/*----------------------------------------------------------------------------
  # Production Tasks
----------------------------------------------------------------------------*/
// Copy into /dist folder
gulp.task( 'copy', function(cb) {
  return gulp.src( copySources )
    .pipe( gulp.dest( 'dist' ) );
    cb;
} );

// Optimize CSS
gulp.task( 'optimize:css', ['copy'], function() {
  return gulp.src( cssMin )
    .pipe( uncss( {
      html: [ "http://wp-dev:8888" ]
    } ) )
    .pipe( gulpIf( '*.css', csso() ) )
    .pipe( gulp.dest( 'dist/assets/css/' ) )
    .pipe( rename( {
      suffix: '.min'
    } ) );
} );


// Optimize JS
gulp.task( 'optimize:js', ['copy'], function() {
  return gulp.src( jsConcat )
    .pipe( concat( 'theme.min.js' ) )
    .pipe( gulpIf( '*.js', uglify() ) )
    .pipe( gulp.dest( 'dist/assets/js' ) );
} );

// Optimize images
gulp.task( 'optimize:img', ['copy'], function() {
  return gulp.src( imageSources )
    .pipe(cache('smushing'))
    .pipe( plumber() )
    .pipe( imageMin( {
      interlaced: true,
      progressive: true
    } ) )
    .pipe( rename( {
      suffix: '-min'
    } ) )
    .pipe( gulp.dest( 'dist/assets/img/' ) );
} );

// Zip a directory
gulp.task( 'zip', function() {
  return gulp.src( 'dist' )
    .pipe( zip( 'theme.zip' ) )
    .pipe( gulp.dest( '/' ) );
} );

/*----------------------------------------------------------------------------
  # Defaults
----------------------------------------------------------------------------*/
gulp.task( 'default', [ 'sass', 'lint', 'serve', 'watch' ]);

gulp.task( 'watch', function() {
  gulp.watch( sassSources, [ 'sass' ] );
  gulp.watch( jsSources, [ 'lint' ] );
  gulp.watch( phpSources, browserSync.reload );
  gulp.watch( htmlSources, browserSync.reload );
  gulp.watch( imageSources, browserSync.reload );
} );

gulp.task( 'build', ['copy', 'optimize:css', 'optimize:js', 'optimize:img']);
