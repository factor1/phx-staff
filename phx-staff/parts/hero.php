<?php
/**
 * Hero.php
 *
 * Content area that displays a hero image and the page title
 * This file is meant to be included into other template files, and will only display a hero image if the post has a featured image
 */

if (has_post_thumbnail()) : if (have_posts()) : while (have_posts()) :
  the_post();
  $thumbId = get_post_thumbnail_id(); // grab the ID of the current featured image
  $thumbUrl = wp_get_attachment_image_src($thumbId, true); // grab the URL of the featured image ?>
  <section class="hero" style="background: url('<?php echo $thumbUrl[0]; ?>') center center no-repeat">
    <div class="page-title">
      <h1><?php the_title(); ?></h1>
    </div>
  </section>
<?php endwhile; endif; else : ?>
  <section class="banner">
    <div class="page-title">
      <h1><?php the_title(); ?></h1>
    </div>
  </section>
<?php endif; ?>
