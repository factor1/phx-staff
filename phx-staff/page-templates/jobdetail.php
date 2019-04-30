<?php
/**
 * Template Name: Job Details
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


  <div class="row">
  	<div class="medium-10 medium-centered columns">


    	<iframe id="tracker_iframe" frameborder="0" scrolling="yes" width="100%" height="800" src="//usportal.tracker-rms.com/phoenixstaff/publish.asp?stylesheet=https://phoenixstaff.com/wp-content/themes/phx-staff/assets/css/rmstracker.css&parameters=title,worktype,location,salaryfrom,description,linkregister&reference=<?php echo $_GET["jobcode"]; ?>"></iframe>
    	
  	</div>
  </div>



<?php
get_footer();
