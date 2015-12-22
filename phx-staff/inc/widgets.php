<?php
/*-----------------------------------------------------------------------------
  Register Widget areas
-----------------------------------------------------------------------------*/
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
  register_sidebar( array(
    'name'          => 'Footer Widget Area',
    'id'            => 'footer-widget',
    'description'   => 'Appears in the footer area',
    'before_widget' => '<nav class="footer-widget">',
    'after_widget'  => '</nav>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>',
  ) );

  unregister_widget('WP_Widget_Calendar');
  unregister_widget('WP_Widget_Links');
  unregister_widget('WP_Widget_Meta');
  unregister_widget('WP_Widget_Search');
  unregister_widget('WP_Widget_Recent_Comments');
}
add_action('widgets_init', 'f1_widgets_init');
