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

    // Add theme support for HTML5 Semantic Markup
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    // Add theme support for document Title tag
    add_theme_support('title-tag');

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
 * Link to all theme CSS/JS files.
 */
function f1_theme_scripts()
{
  // CSS files
  wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Economica:400,700|Ubuntu:400,700|Ubuntu+Condensed');
  wp_enqueue_style('theme-css', get_template_directory_uri().'/assets/css/theme.min.css');

  // JS files
  wp_enqueue_script('foundation-js', get_template_directory_uri().'/assets/js/vendor/foundation.min.js', '', '', true);
  wp_enqueue_script('match-height', get_template_directory_uri().'/assets/js/plugins/matchHeight.min.js', '', '', true);
  wp_enqueue_script('nifty-nav', get_template_directory_uri().'/assets/js/plugins/nifty-nav.js', '', '', true);
  wp_enqueue_script('theme-js', get_template_directory_uri().'/assets/js/theme.min.js', array('foundation-js', 'match-height'), '', true);
}
add_action('wp_enqueue_scripts', 'f1_theme_scripts');

/**
 * Load factor1 menus
 */
require get_template_directory() . '/inc/menus.php';

/**
 * Load factor1 widgets
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Load factor1 ACF
 */
require get_template_directory() . '/inc/acf.php';

/**
 * Load factor1 tweaks
 */
require get_template_directory() . '/inc/tweaks.php';

/**
 * Load factor1 whitelabeling
 */
require get_template_directory() . '/inc/whitelabel.php';

/**
 * Load factor1 copyright
 */
require get_template_directory() . '/inc/copyright.php';
