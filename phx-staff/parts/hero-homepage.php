<?php
/**
 * Hero-homepage.php
 *
 * Content area that displays a hero image and the page title.
 * This file is specific to the homepage.
 */
?>

  <section class="hero-homepage" style="background: url('<?php the_field('hero_image'); ?>') top center no-repeat">
    <div class="row">
      <div class="medium-6 large-5 end columns">
        <div class="hh-content">
          <h2><?php the_field( 'hero_title' ); ?></h2>
          <p class="featured"><?php the_field( 'hero_content' ); ?></p>
        </div>
      </div>
    </div>
  </section>
