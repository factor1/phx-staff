<?php
/**
 * Template Name: Homepage
 */

get_header();
get_template_part('parts/hero', 'homepage'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <section class="careers"><!-- Career Search -->
    <div class="expanded row">
      <div class="medium-6 columns">
        <!-- custom navigation -->
      </div>
      <div class="medium-6 columns">
        <!-- custom navigation -->
      </div>
    </div>
  </section>


  <?php if (have_rows('partner')) : ?><!-- Partners -->
  <section class="partners">
    <div class="row">
      <div class="medium-10 medium-centered columns">
        <div class="row">
          <div class="medium-7 medium-centered columns">
            <h2><?php the_field( 'partner_title' ); ?></h2>
          </div>
        </div>
        <div class="partner-items">
          <?php while (have_rows('partner')) : the_row(); ?>
          <a href="<?php the_sub_field( 'partner_link' ); ?>">
            <img src="<?php the_sub_field( 'partner_logo' ); ?>" alt="<?php the_sub_field( 'partner_name' ); ?>">
          </a>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <section class="cta hide-for-large"><!-- Mobile CTA -->
    <div class="cta-image" style="background: url('<?php the_field('home_cta_background'); ?>') center center no-repeat"></div>
    <div class="cta-content">
      <h2><?php the_field( 'home_cta_title' ); ?></h2>
      <p><?php the_field( 'home_cta_content' ); ?></p>
      <?php if(get_field('home_cta_internal_link')) : ?>
      <a class="button round" href="<?php the_field('home_cta_internal_link'); ?>"><?php the_field('home_cta_link_text'); ?></a>
      <?php elseif(get_field('home_cta_external_link')) : ?>
      <a class="button round" href="<?php the_field('home_cta_external_link'); ?>"><?php the_field('home_cta_link_text'); ?></a>
      <?php endif; ?>
    </div>
  </section>


  <section class="cta show-for-large" style="background: url('<?php the_field('home_cta_background'); ?>') center center no-repeat"><!-- Desktop CTA -->
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


  <?php get_template_part('parts/linkedin'); ?>


  <?php if (have_rows('value')) : ?><!-- Values -->
  <section class="values">
    <div class="row expanded">
      <?php while (have_rows('value')) : the_row(); ?>
      <div class="large-4 columns value-item">
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
    <a class="button round" href="<?php the_field('connect_link'); ?>">Visit our blog</a>
  </section>

<?php endwhile; endif; ?>
<?php
get_footer();
