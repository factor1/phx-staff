<?php

// Register Custom Post Type
function featured_jobs() {

	$labels = array(
		'name'                  => _x( 'Featured Jobs', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Feautred Job', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Featured Jobs', 'text_domain' ),
		'name_admin_bar'        => __( 'Featured Jobs', 'text_domain' ),
		'archives'              => __( 'Featured Jobs Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Featured Job:', 'text_domain' ),
		'all_items'             => __( 'All Featured Jobs', 'text_domain' ),
		'add_new_item'          => __( 'Add New Featured Job', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Featured Job', 'text_domain' ),
		'edit_item'             => __( 'Edit Featured Job', 'text_domain' ),
		'update_item'           => __( 'Update Featured Job', 'text_domain' ),
		'view_item'             => __( 'View Featured Job', 'text_domain' ),
		'search_items'          => __( 'Search Featured Job', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'featured-job',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Feautred Job', 'text_domain' ),
		'description'           => __( 'A list of featured jobs. ', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'featured-jobs',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'featured_jobs', $args );

}
add_action( 'init', 'featured_jobs', 0 );

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
  wp_enqueue_style('style-css', get_template_directory_uri().'/style.css');

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
