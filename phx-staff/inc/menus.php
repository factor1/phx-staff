<?php
/*-----------------------------------------------------------------------------
  Register Custom Menus
-----------------------------------------------------------------------------*/
function custom_menus() {
  register_nav_menus(array(
    'primary' => __('Primary Menu', 'phx-staff'),
    'footer'  => __('Footer Menu', 'phx-staff'),
    'social'  => __('Social Menu', 'phx-staff'),
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

/*
 * Customize the output of the default menus
 *
 * Only useful in situations where explicit control is needed over the output
 * Note that the use of this menu requires the direct function call, not wp_nav_menu()
 */
function f1_primary_menu()
{
  if (has_nav_menu('primary')) {
    wp_nav_menu(
      array(
        'theme_location'  => 'primary',
        'menu'            => 'Primary',
        'container'       => 'nav',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => '',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
      )
    );
  }
}
