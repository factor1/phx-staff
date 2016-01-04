<?php
/**
 * Template Name: Locations
 */
// grab the right image based on the current page
// it is important the client doesn't have the option to change the slugs for the location pages in WP
$currentLocation = get_queried_object()->post_name;
$locationImage;
if ($currentLocation == 'phoenix') {
  $locationImage = 'Arizona-Color.png';
} else if ($currentLocation == 'las-vegas') {
  $locationImage = 'Nevada-Color.png';
} else {
  $locationImage = 'Texas-Color.png';
}
get_header();
get_template_part('parts/hero'); ?>

  <section class="main-content location">
    <div class="row">
      <div class="medium-10 medium-centered columns">
      <?php if (get_field('location_file') || get_field('location_internal_link') || get_field('location_external_link')) : ?>
        <div class="row">
          <div class="large-7 columns">
            <?php the_field('location_content'); ?>
          </div>
          <div class="large-5 columns">
          <?php if(get_field('location_file')) : ?>
            <a href="<?php the_field('location_file'); ?>" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/DownloadFile.png" alt="Content download from Phoenix Staff">
            </a>
          <?php
          endif;
          if (get_field('location_internal_link')) : ?>
            <a class="button round" href="<?php the_field('location_internal_link'); ?>">Read More <i class="fa fa-arrow-right"></i></a>
          <?php elseif (get_field('location_external_link')) : ?>
            <a class="button round" href="<?php the_field('location_external_link'); ?>">Read More <i class="fa fa-arrow-right"></i></a>
          <?php endif; ?>
          </div>
        </div>
      <?php
      else : the_field('location_content');
      endif; ?>
      </div>
    </div>
  </section>

<?php
get_template_part('parts/staff', 'location');
get_template_part('parts/linkedin');
if(have_rows('location_jobs')) : ?>

  <section class="featured-jobs">
    <div class="row">
      <div class="medium-10 medium-centered columns">
        <h2>Featured Jobs</h2>
        <div class="row small-up-1 medium-up-2">
          <?php while(have_rows('location_jobs')) : the_row(); ?>
          <div class="column">
            <a href="">
              <div class="job-item">
                <div class="job-image" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $locationImage ?>') center center no-repeat"></div>
                <div class="job-content">
                  <h3><?php the_sub_field('location_job_title'); ?></h3>
                  <p><?php echo get_the_title(); ?></p>
                </div>
              </div>
            </a>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </section>

<?php endif; ?>

<!-- The rest is API and James will handle -->


<?php
get_footer();
