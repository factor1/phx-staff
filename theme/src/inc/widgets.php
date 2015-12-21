<?php

// Register all widget areas here
function theme_widgets() {
  register_sidebar( array(
    'name'          => 'Footer Widget Area',
    'id'            => 'footer-widget',
    'description'   => 'Appears in the footer area',
    'before_widget' => '<nav class="footer-widget">',
    'after_widget'  => '</nav>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'theme_widgets' );
