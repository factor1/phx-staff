<?php
/**
 * The template file for displaying blog post metadata
 */
 ?>

<div class="meta">
  <span><?php the_time('F jS, Y') ?></span><br>
  <span><?php echo get_cat_name();?></span>
  <?php
    if ( comments_open() ) {
      echo '|' . ' ';
      echo '<span>';
      comments_popup_link('No Comments Yet', '1 Comment', '', 'comments-link', 'No Comments Allowed');
      echo '</span>';
    }
  ?>
</div>
