<?php
/**
 * Template Name: About Us
 */

get_header();
get_template_part('parts/hero'); ?>


  <section class="main-content">
    <div class="row">
      <div class="medium-10 medium-centered columns about">
        <h2><?php the_field( 'about_title' ); ?></h2>
        <div class="about-content">
          <?php the_field( 'about_content' ); ?>
        </div>
      </div>
    </div>
  </section>

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
<?php endif; ?>


<?php
get_footer();
