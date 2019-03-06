<?php
/**
 * Template Name: Landing
 */

$button_text = get_field('button_text');
$button_link = get_field('button_link')
?>

<html <?php language_attributes(); ?> class="no-js">
  <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php wp_head(); ?>
  </head>
  <?php get_header(); ?>
  <?php while ( have_posts() ) : the_post(); ?>
      <section class="landing" style="background-color: #000;">
        <div class="row">
          <div class="small-6 small-centered columns">
            <div class="landing-content">
              <?php the_content(); ?>
              <!-- <a href="<?php //echo $button_link; ?>" class="button"><?php //echo $button_text; ?></a> -->
            </div>
          </div>
        </div>
      </section>
  <?php endwhile; ?>
  <?php get_footer(); ?>
</html>
