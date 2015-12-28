<?php
 /**
  * The template file for displaying the staff grid.
  *
  * May need a custom query for displaying staff on a per location basis
  */
 ?>


<section class="staff">
  <div class="row">
    <div class="medium-10 medium-centered columns">
      <h2>Our Team.</h2>

      <div class="row small-up-1 medium-up-3 large-up-5">
      <?php
        global $post;
        $args = array(
          'numberposts'      => -1,
          'post_type'        => 'f1_staffgrid_cpt',
          // 'f1_staffgrid_tax' => 'leadership', // Department Taxonomy (per site).
          'meta_key'         => 'last_name',
          'orderby'          => 'meta_value',
          // 'post__in'         => array( 2, 5, 12, 14, 20 );,  // Use ID's in an array for specific ordering.
          'order'            => 'ASC',
        );

      $staffgrid = get_posts($args);
      foreach ($staffgrid as $post) :  setup_postdata($post); ?>

        <div class="column">
          <a class="staff-item" data-remodal-target="modal-<?php the_ID(); ?>">
            <div class="f1_mentor_photo_container">
              <?php if (has_post_thumbnail()) the_post_thumbnail(); ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Staff-Hover.png" alt="" />
            </div>

            <div class="f1_mentor_summary_name">
              <strong><?php the_field('first_name'); ?>&nbsp;<?php the_field('last_name'); ?></strong>
            </div>

            <div class="f1_mentor_summary_title">
              <small><?php if (get_field('title')) : the_field('title'); endif; ?></small>
            </div>
          </a>
        </div>

        <div class="remodal" data-remodal-id="modal-<?php the_ID();?>">
          <div class="row">
            <div class="medium-4 columns">
              <div class="f1_mentor_details_photo_container">
                <?php if (has_post_thumbnail()) the_post_thumbnail(); ?>
              </div>

              <div class="f1_mentor_details_social_container">
                <?php if (get_field('phone')) : echo('Phone: '); the_field('phone'); endif; ?></br>
                <?php if (get_field('email_address')) : echo('<a href="mailto:'); the_field('email_address'); echo('">Email '); the_field('first_name'); echo('</a></br>'); endif; ?>

                <?php if (get_field('twitter_url')) : echo('<a href="'); the_field('twitter_url'); echo('">Twitter</a></br>');  endif; ?>
                <?php if (get_field('facebook_url')) : echo('<a href="'); the_field('facebook_url'); echo('">Facebook</a></br>');  endif; ?>
                <?php if (get_field('linkedin_irl')) : echo('<a href="'); the_field('linkedin_irl'); echo('">LinkedIn</a></br>');  endif; ?>
                <?php if (get_field('instagram_url')) : echo('<a href="'); the_field('instagram_url'); echo('">Instagram</a></br>');  endif; ?>
              </div>
            </div>

            <div class="medium-8 columns">
              <p class="f1_mentor_details_name">
                <strong><?php the_field('first_name'); ?>&nbsp;<?php the_field('last_name'); ?></strong></br>
                <span class="f1_mentor_summary_title">
                  <small> <?php if (get_field('title')) : the_field('title'); endif; ?></small>
                </span>
              </p>

              <div class="f1_mentor_details_bio">
                <?php if (get_field('staff_bio')) : the_field('staff_bio'); endif; ?>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
