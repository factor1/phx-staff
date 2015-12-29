<?php
/**
 * The template file for displaying the LinkedIN call to action
 */

 ?>

  <div class="linkedin-cta">
    <h2>
      <a href="<?php the_field('cta_url', 'option'); ?>" target="_blank">
        <?php the_field('cta_title', 'option'); ?> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/LinkedinAd.png" alt="Join Phoenix Staff on LinkedIN">
      </a>
    </h2>
  </div>
