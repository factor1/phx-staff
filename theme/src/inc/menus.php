<?php
/*-----------------------------------------------------------------------------
  Register Custom Menus
-----------------------------------------------------------------------------*/
function custom_menus() {
  register_nav_menus(array(
    'primary' => esc_html__('Primary Menu', 'phx-staff'),
    'footer'  => esc_html__('Footer Menu', 'phx-staff'),
    'social'  => esc_html__('Social Menu', 'phx-staff'),
  ));
}
add_action( 'init', 'custom_menus' );

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
