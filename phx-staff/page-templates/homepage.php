<?php
/**
 * Template Name: Homepage
 */

get_header();
get_template_part('parts/hero', 'homepage');
if (have_posts()) : while (have_posts()) : the_post(); ?>

  <section class="careers"><!-- Career Search -->
    <div class="expanded row">
      <div class="medium-6 columns">
        <h2 id="career-toggle"><?php the_field( 'find_jobs' ); ?> <i class="fa fa-angle-down"></i></h2>
        <nav class="career-search">
          <ul class="career-list">
            <li>
              <a href="<?php home_url(); ?>/open-opportunities/phoenix/">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Arizona-Color.png">
                <p>Phoenix, AZ</p>
              </a>
            </li>
            <li>
              <a href="<?php home_url(); ?>/open-opportunities/las-vegas/">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Texas-Color.png">
                <p>Austin, TX</p>
              </a>
            </li>
            <li>
              <a href="<?php home_url(); ?>/open-opportunities/austin/">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Nevada-Color.png">
                <p>Las Vegas, NV</p>
              </a>
            </li>
            <li>
              <a href="<?php home_url(); ?>/open-opportunities/">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/US-Color.png">
                <p>All Locations</p>
              </a>
            </li>
          </ul>
        </nav>
      </div>

      <div class="medium-6 columns">
        <h2 class="candidate-h2">
          <a href="<?php home_url(); ?>/about-us"><?php the_field( 'find_candidates' ); ?></a>
        </h2>
      </div>
    </div>
  </section>


  <section class="partners">
    <div class="row">
      <div class="medium-10 medium-centered columns">
        <div class="row">
          <div class="medium-7 medium-centered columns">
            <h2><?php the_field( 'partner_title' ); ?></h2>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="cta hide-for-large"><!-- Mobile CTA -->
    <div class="cta-image" style="background: url('<?php the_field('home_cta_background'); ?>') left center no-repeat"></div>
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
