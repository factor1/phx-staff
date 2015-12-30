<?php
/**
 * Template Name: Homepage
 */

get_header();
get_template_part('parts/hero', 'homepage'); ?>


  <section class="careers"><!-- Career Search -->

  </section>
  

  <?php if (have_rows('value')) : ?><!-- Partners -->
  <section class="partners">
    <div class="row">
      <div class="medium-10 medium-centered columns">
        <h2><?php the_field( 'partner_title' ); ?></h2>
        <?php while (have_rows('value')) : the_row(); ?>
        <a href="<?php the_sub_field( 'partner_link' ); ?>">
          <img src="<?php the_sub_field( 'partner_image' ); ?>" alt="<?php the_sub_field( 'partner_name' ); ?>">
        </a>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>


  <section class="cta" style="background: url('<?php the_field('home_cta_background'); ?>') center center no-repeat"><!-- CTA -->
    <div class="row">
      <div class="medium-6 medium-offset-6 columns">
        <h2><?php the_field( 'home_cta_title' ); ?></h2>
        <p class="featured"><?php the_field( 'home_cta_content' ); ?></p>
        <?php if(get_field('home_cta_internal_link')) : ?>
        <a class="button round" href="<?php the_field('home_cta_internal_link'); ?>"><?php the_field('home_cta_link_text'); ?></a>
        <?php elseif(get_field('home_cta_external_link')) : ?>
        <a class="button round" href="<?php the_field('home_cta_external_link'); ?>"><?php the_field('home_cta_link_text'); ?></a>
        <?php endif; ?>
      </div>
    </div>
  </section>


  <?php if (have_rows('value')) : ?><!-- Values -->
  <section class="values">
    <div class="row expanded">
      <?php while (have_rows('value')) : the_row(); ?>
      <div class="medium-4 columns value-item">
        <img src="<?php the_sub_field( 'value_image' );?>" alt="">
        <h2><?php the_sub_field( 'value_title' ); ?></h2>
        <p class="featured"><?php the_sub_field( 'value_content' ); ?></p>
      </div>
      <?php endwhile; ?>
    </div>
  </section>
  <?php endif; ?>


  <section class="connect"><!-- Connect CTA -->
    <h2><?php the_field('connect_title'); ?></h2>
    <a class="button round" href="<?php the_field('connect_link'); ?>">Connect with Us</a>
  </section>


<?php
get_footer();