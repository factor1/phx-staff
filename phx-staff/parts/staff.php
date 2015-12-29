<?php
 /**
  * The template file for displaying the staff grid.
  *
  * This template file displays staff from ALL locations
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
            'meta_key'         => 'last_name',
            'orderby'          => 'meta_value',
            'order'            => 'ASC',
          );

        $staffgrid = get_posts($args);
        foreach ($staffgrid as $post) :  setup_postdata($post); ?>

          <div class="column"><?php // TODO: can these be centered from the start? ?>
            <a class="staff-item" data-remodal-target="modal-<?php the_ID(); ?>">
              <div class="f1_mentor_photo_container">
                <?php if (has_post_thumbnail()) the_post_thumbnail(); ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Staff-Hover.png" alt="" />
              </div>

              <div class="f1_mentor_summary_name">
                <strong><?php the_field('first_name'); echo ' '; the_field('last_name'); ?></strong>
              </div>

              <div class="f1_mentor_summary_title">
                <small><?php if (get_field('title')) the_field('title'); ?></small>
              </div>
            </a>
          </div>

          <div class="remodal" data-remodal-id="modal-<?php the_ID();?>">
            <div class="f1_mentor_details_photo_container">
              <?php if (has_post_thumbnail()) the_post_thumbnail(); ?>
            </div>

            <div class="f1_mentor_details_name">
              <h2><?php the_field('first_name'); echo ' '; the_field('last_name'); ?></h2>
              <p class="f1_mentor_summary_title"><?php if (get_field('title')) the_field('title'); ?></p>
            </div>

            <div class="f1_mentor_details_social_container">
              <?php if( get_field( 'email_address' ) ) : ?>
                <a href="mailto:<?php the_field( 'email_address' ); ?>">
                  <i class="fa fa-envelope fa-lg"></i>
                </a>
              <?php endif; ?>
              <?php if( get_field( 'linkedin_url' ) ) : ?>
                <a href="<?php the_field( 'linkedin_url' ); ?>">
                  <i class="fa fa-linkedin-square fa-lg"></i>
                </a>
              <?php endif; ?>
              <?php if( get_field( 'google+_url' ) ) : ?>
                <a href="<?php the_field( 'google+_url' ); ?>">
                  <i class="fa fa-google-plus-square fa-lg"></i>
                </a>
              <?php endif; ?>
              <?php if( get_field( 'twitter_url' ) ) : ?>
                <a href="<?php the_field( 'twitter_url' ); ?>">
                  <i class="fa fa-twitter-square fa-lg"></i>
                </a>
              <?php endif; ?>
              <?php if( get_field( 'facebook_url' ) ) : ?>
                <a href="<?php the_field( 'facebook_url' ); ?>">
                  <i class="fa fa-facebook-square fa-lg"></i>
                </a>
              <?php endif; ?>
            </div>

            <div class="f1_mentor_details_bio">
              <?php if (get_field('staff_bio')) the_field('staff_bio'); ?>
            </div>
          </div>
        <?php endforeach; wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  </section>
