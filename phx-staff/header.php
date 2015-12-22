<?php
/**
 * Header.php
 *
 * Template file including the head of the document and primary navigation
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php endif; ?>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="mobile-header hide-for-large"><!-- Mobile Header -->
    <div class="expanded row">
      <div class="small-9 columns">
        Logo here
      </div>
      <div class="small-3 columns">
        Menu
      </div>
    </div>
  </header><!-- Close Mobile Header -->

  <header class="desktop-header show-for-large"><!-- Desktop Header -->
    <div class="expanded row">
      <div class="small-9 columns">
        Logo here
      </div>
      <div class="small-3 columns">
        Menu
      </div>
    </div>
  </header><!-- Close Desktop Header -->

  <main><!-- Main -->
