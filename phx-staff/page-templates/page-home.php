<?php
/**
 * Template Name: Homepage
 */

get_header();
get_template_part('parts/hero');
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <section class="main-content">
    <div class="row">
      <div class="medium-10 medium-centered columns">
        <?php the_content(); ?>
      </div>
    </div>
  </section>
<?php endwhile; endif; ?>



<?php get_footer(); ?>
