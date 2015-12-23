<?php
/**
 * The default template for the blog
 */

get_header();
get_template_part('parts/hero');
?>

<section class="main-content">
  <div class="row">
    <div class="medium-8 medium-centered columns">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
          <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

          <?php if(has_post_thumbnail()) {
            the_post_thumbnail();
          } ?>

          <?php get_template_part('parts/meta' ); ?><!-- TODO: add this page -->
          <?php the_content(); ?>
        </div>
      <?php endwhile; ?>

      <?php get_template_part('parts/nav' ); ?><!-- TODO: add this page -->

      <?php else : ?>
        <h2>Not Found</h2>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php

get_sidebar();
get_footer();

?>
