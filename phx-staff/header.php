<?php
/**
 * Header.php
 *
 * Template file including the head of the document and primary navigation
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
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

  <header><!-- Header -->
    <div class="header-logo">
      <?php if (get_field('logo', 'option')) : ?>
        <h1 class="logo" style="background: url('<?php the_field('logo', 'option'); ?>') center center no-repeat">
          <a href="<?php echo esc_url(home_url('/')); ?>">Phoenix Staff</a>
        </h1>
      <?php else : ?>
        <h1 class="logo" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/PhoenixStaff-logo.png') center center no-repeat">
          <a href="<?php echo esc_url(home_url('/')); ?>">Phoenix Staff</a>
        </h1>
      <?php endif; ?>
    </div>

    <div class="header-menu">
      <div class="mobile-menu hide-for-large"><!-- Mobile menu -->
        <?php wp_nav_menu( array('theme_location' => 'primary', 'container' => 'nav')); ?>
      </div>
      <div class="desktop-menu show-for-large"><!-- Desktop menu -->
        <?php wp_nav_menu( array('theme_location' => 'primary', 'container' => 'nav')); ?>
      </div>
    </div>
  </header><!-- Close Header -->

  <main><!-- Main -->
