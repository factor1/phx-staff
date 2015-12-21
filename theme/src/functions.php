<?php

if (!function_exists('f1_features')) {

  // Register Theme Features
  function f1_features()
  {
    // Add theme support for Automatic Feed Links
    add_theme_support('automatic-feed-links');

    // Add theme support for Post Formats
    add_theme_support('post-formats', array('status', 'quote', 'gallery', 'image', 'video', 'audio', 'link', 'aside'));

    // Add theme support for Featured Images
    add_theme_support('post-thumbnails');

    // Add theme support for Custom Header
    $header_args = array(
      'default-image'          => '#',
      'width'                  => 1200,
      'height'                 => 600,
      'flex-width'             => true,
      'flex-height'            => true,
      'uploads'                => true,
      'random-default'         => false,
      'header-text'            => true,
      'default-text-color'     => '#ffffff',
      'wp-head-callback'       => '',
      'admin-head-callback'    => '',
      'admin-preview-callback' => '',
    );
    add_theme_support('custom-header', $header_args);

    // Add theme support for HTML5 Semantic Markup
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    // Add theme support for document Title tag
    add_theme_support('title-tag');

    // Add theme support for post types
    add_theme_support('post-formats', array(
      'aside',
      'image',
      'video',
      'quote',
      'link',
    ));

    // Add theme support for custom menus
    add_theme_support('menus');

    // Create theme menus
    register_nav_menus(array(
      'primary' => esc_html__('Primary Menu', 'factor1_blankwp'),
      'footer'  => esc_html__('Footer Menu', 'factor1_blankwp'),
      'social'  => esc_html__('Social Menu', 'factor1_blankwp'),
    ));

    // Set up the WordPress core custom background feature.
    add_theme_support('custom-background', apply_filters('factor1_blankwp_custom_background_args', array(
      'default-color' => 'ffffff',
      'default-image' => '',
    )));

    // Add theme support for custom CSS in the TinyMCE visual editor
    add_editor_style('editor.css');

    // Clean up the default WordPress head section
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'start_post_rel_link');
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'adjacent_posts_rel_link');
  }
  add_action('after_setup_theme', 'f1_features');
}

/**
 * Removes the jQuery version that ships with WordPress and add our own.
 */
if ( ! is_admin() )
{
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"), false );
  wp_enqueue_script( 'jquery' );
}

/**
 * Link to all theme CSS files.
 */
function f1_theme_scripts()
{
  // CSS files
  wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
  wp_enqueue_style('theme-css', get_template_directory_uri().'/assets/css/theme.css');

  // JS files
  wp_enqueue_script('theme-js', get_template_directory_uri().'/assets/js/theme.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'f1_theme_scripts');

/**
 * Set the maximun content width for the theme.
 */
function f1_content_width()
{
  $GLOBALS['content_width'] = apply_filters('f1_content_width', 1200);
}
add_action('after_setup_theme', 'f1_content_width', 0);

/**
 * Register widget area.
 */
function f1_widgets_init()
{
  register_sidebar(array(
    'name'          => esc_html__('Sidebar', 'f1_'),
    'id'            => 'sidebar-1',
    'description'   => '',
    'before_widget' => '<aside id="%1$s" class="widget %2$s" role="complementary">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ));

  unregister_widget('WP_Widget_Calendar');
  unregister_widget('WP_Widget_Links');
  unregister_widget('WP_Widget_Meta');
  unregister_widget('WP_Widget_Search');
  unregister_widget('WP_Widget_Recent_Comments');
}
add_action('widgets_init', 'f1_widgets_init');

/*
 * Social media icon menu as per http://justintadlock.com/archives/2013/08/14/social-nav-menus-part-2
 */
function f1_social_menu()
{
  if (has_nav_menu('social')) {
    wp_nav_menu(
      array(
        'theme_location'  => 'social',
        'container'       => 'nav',
        'container_id'    => 'menu-social',
        'container_class' => 'menu-social',
        'menu_id'         => 'menu-social-items',
        'menu_class'      => 'menu-items',
        'depth'           => 1,
        'link_before'     => '<span class="screen-reader-text">',
        'link_after'      => '</span>',
        'fallback_cb'     => '',
      )
    );
  }
}

/**
 * Load factor1 tweaks
 */
require get_template_directory() . '/inc/tweaks.php';

/**
 * Load factor1 whitelabeling
 */
require get_template_directory() . '/inc/whitelabel.php';
