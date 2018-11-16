<?php
/**
 * Header.php
 *
 * Template file including the head of the document and primary navigation
 */

 // Decalre Page ID for Charities page:
 $charities = 559;
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

<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-touch-icon-152x152.png" />
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-196x196.png" sizes="196x196" />
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-16x16.png" sizes="16x16" />
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-128.png" sizes="128x128" />
<meta name="application-name" content="&nbsp;"/>
<meta name="msapplication-TileColor" content="#FFFFFF" />
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/favicon/mstile-144x144.png" />
<meta name="msapplication-square70x70logo" content="<?php echo get_template_directory_uri(); ?>/assets/favicon/mstile-70x70.png" />
<meta name="msapplication-square150x150logo" content="<?php echo get_template_directory_uri(); ?>/assets/favicon/mstile-150x150.png" />
<meta name="msapplication-wide310x150logo" content="<?php echo get_template_directory_uri(); ?>/assets/favicon/mstile-310x150.png" />
<meta name="msapplication-square310x310logo" content="<?php echo get_template_directory_uri(); ?>/assets/favicon/mstile-310x310.png" />

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/plugins/js/remodal.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/plugins/js/remodal-default-theme.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/forwardmodal.css">
<script src="<?php bloginfo('template_url'); ?>/assets/plugins/js/remodal.js"></script>


  <?php
  gravity_form_enqueue_scripts( 1, true );
  wp_head(); ?>
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

    <?php if (is_page($charities)) : ?>
    <div class="header-menu">
      <div class="mobile-menu hide-for-large"><!-- Mobile menu -->
        <span class="toggle-text"><!-- Mobile Hamburger -->
          Menu
        </span>
        <a id="nifty-nav-toggle" class="mm_open"><span></span></a>
      </div>
      <div class="desktop-menu show-for-large"><!-- Desktop menu -->
        <?php wp_nav_menu( array('theme_location' => 'primary', 'container' => 'nav')); ?>
      </div>
    </div>
  <?php else :?>
    <div class="header-menu">
      <div class="mobile-menu hide-for-large"><!-- Mobile menu -->
        <span class="toggle-text"><!-- Mobile Hamburger -->
          Menu
        </span>
        <a id="nifty-nav-toggle" class="mm_open"><span></span></a>
      </div>
      <div class="desktop-menu show-for-large"><!-- Desktop menu -->
        <?php wp_nav_menu( array('theme_location' => 'primary', 'container' => 'nav')); ?>
      </div>
    </div>
  <?php endif; ?>


  </header><!-- Close Header -->

  <div class="nifty-panel"><!-- Mobile Navigation Panel -->
    <?php wp_nav_menu( array('theme_location' => 'primary', 'container' => 'nav', 'depth' => 2) ); ?>
  </div>

  <main><!-- Main -->
