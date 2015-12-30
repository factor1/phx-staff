<?php
/**
 * Template Name: About Us
 */

get_header();
get_template_part('parts/hero'); ?>


  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <section class="main-content">
    <div class="row">
      <div class="medium-10 medium-centered columns about-content">
        <?php the_content(); ?>
      </div>
    </div>
  </section>
  <?php endwhile; endif; ?>

<?php
get_template_part('parts/staff');
get_template_part('parts/linkedin');
if (get_field('community_content')) : ?>

  <section class="community" style="background: url('<?php the_field('community_background'); ?>') center center no-repeat">
    <div class="row">
      <div class="medium-5 medium-offset-7 columns">
        <h2><?php the_field('community_title'); ?></h2>
        <?php the_field('community_content'); ?>
      </div>
    </div>
  </section>

<?php
endif;
get_footer();
