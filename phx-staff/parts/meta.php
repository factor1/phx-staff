<?php
/**
 * The template file for displaying blog post metadata
 */
 ?>

<div class="meta">
  <span><?php the_time('F jS, Y') ?></span><br>
  <span>
    <?php
    $categories = get_the_category();
    $separator = ' ';
    $output = '';
    if ( ! empty( $categories ) ) {
        foreach( $categories as $category ) {
            $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
        }
        echo trim( $output, $separator );
    }
    ?>
  </span>
  <?php
    if ( comments_open() ) {
      echo '|' . ' ';
      echo '<span>';
      comments_popup_link('No Comments Yet', '1 Comment', '', 'comments-link', 'No Comments Allowed');
      echo '</span>';
    }
  ?>
</div>
