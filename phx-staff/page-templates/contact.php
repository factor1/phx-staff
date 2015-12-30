<?php
/**
 * Template Name: Contact Us
 */

get_header();
get_template_part('parts/hero'); ?>

  <section class="main-content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="row">
      <div class="medium-8 medium-centered columns">
        <?php the_content(); ?>
      </div>
    </div>
    <?php endwhile; endif; ?>

    <div class="row">
      <div class="medium-6 medium-centered columns">
        <?php gravity_form( 1, false, false, false, '', true ); ?>
      </div>
    </div>
  </section>

  <section class="offices"><!-- TODO: solve for having more than one Google Map on the page at a time  -->
    <div class="row"><!-- TODO: use a loop/repeater? -->
      <div class="medium-10 medium-centered columns">
        <div class="row">
          <div class="medium-4 columns"><!-- Phoenix Office -->
            <div class="location-item">
              <div class="location-map">
                <div id="phoenix-map" style="width:100%; height:270px; z-index:0;"></div>
                <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
                <script>
                  function gmapsBackgroundInit(){
                    var map;
                    var latlng = new google.maps.LatLng(<?php the_field('latitude', 'option'); ?>, <?php the_field('longitude', 'option'); ?>);
                    var myLatLng = new google.maps.LatLng(<?php the_field('latitude', 'option'); ?>, <?php the_field('longitude', 'option'); ?>);
                    var stylez = [
                      { stylers: [{
                        saturation: 0,
                        lightness: 0
                        }]
                      }
                    ];

                    var mapOptions = {
                      zoom: 15,
                      center: latlng,
                      scrollwheel: false,
                      mapTypeControlOptions: {
                        mapTypeIds: []
                      }
                    };
                    map = new google.maps.Map(document.getElementById("phoenix-map"), mapOptions);

                    var styledMapOptions = {
                      name: "I + M"
                    }

                    var jayzMapType = new google.maps.StyledMapType(stylez, styledMapOptions);

                    map.mapTypes.set('I + M', jayzMapType);
                    map.setMapTypeId('I + M');

                    var image = '<?php echo get_template_directory_uri(); ?>/assets/img/LocationPin.png';

                    var beachMarker = new google.maps.Marker({
                      position: myLatLng,
                      map: map,
                      animation: google.maps.Animation.DROP,
                      icon: image
                    });
                  }
                  gmapsBackgroundInit();
                </script>
              </div>

              <div class="location-info">
                <h3>Phoenix Office</h3>
                <p><?php the_field('address', 'option') ?> <?php the_field('address_2', 'option') ?></p>
                <p><?php the_field('city', 'option') ?>, <?php the_field('state', 'option') ?> <?php the_field('zip', 'option') ?></p>
                <p>Phone: <?php the_field('phone', 'option') ?></p>
                <p>Fax: <?php the_field('fax', 'option') ?></p>
                <p>Email: <a href="mailto:<?php the_field('email', 'option') ?>">Phoenix Area Info</a></p>
              </div>
            </div>
          </div><!-- close Phoenix Office -->

          <div class="medium-4 columns"><!-- Las Vegas Office -->
            <div class="location-item">
              <div class="location-map">
                <div id="vegas-map" style="width:100%; height:270px; z-index:0;"></div>
                <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
                <script>
                  function gmapsBackgroundInit(){
                    var map;
                    var latlng = new google.maps.LatLng(<?php the_field('vegas_latitude', 'option'); ?>, <?php the_field('vegas_longitude', 'option'); ?>);
                    var myLatLng = new google.maps.LatLng(<?php the_field('vegas_latitude', 'option'); ?>, <?php the_field('vegas_longitude', 'option'); ?>);
                    var stylez = [
                      { stylers: [{
                        saturation: 0,
                        lightness: 0
                        }]
                      }
                    ];

                    var mapOptions = {
                      zoom: 15,
                      center: latlng,
                      scrollwheel: false,
                      mapTypeControlOptions: {
                        mapTypeIds: []
                      }
                    };
                    map = new google.maps.Map(document.getElementById("vegas-map"), mapOptions);

                    var styledMapOptions = {
                      name: "I + M"
                    }

                    var jayzMapType = new google.maps.StyledMapType(stylez, styledMapOptions);

                    map.mapTypes.set('I + M', jayzMapType);
                    map.setMapTypeId('I + M');

                    var image = '<?php echo get_template_directory_uri(); ?>/assets/img/LocationPin.png';

                    var beachMarker = new google.maps.Marker({
                      position: myLatLng,
                      map: map,
                      animation: google.maps.Animation.DROP,
                      icon: image
                    });
                  }
                  gmapsBackgroundInit();
                </script>
              </div>

              <div class="location-info">
                <h3>Las Vegas Office</h3>
                <p><?php the_field('vegas_address', 'option') ?> <?php the_field('vegas_address_2', 'option') ?></p>
                <p><?php the_field('vegas_city', 'option') ?>, <?php the_field('vegas_state', 'option') ?> <?php the_field('vegas_zip', 'option') ?></p>
                <p>Phone: <?php the_field('vegas_phone', 'option') ?></p>
                <p>Fax: <?php the_field('vegas_fax', 'option') ?></p>
                <p>Email: <a href="mailto:<?php the_field('vegas_email', 'option') ?>">Las Vegas Area Info</a></p>
              </div>
            </div>
          </div><!-- close Las Vegas Office -->

          <div class="medium-4 columns"><!-- Austin Office -->
            <div class="location-item">
              <div class="location-map">
                <div id="austin-map" style="width:100%; height:270px; z-index:0;"></div>
                <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
                <script>
                  function gmapsBackgroundInit(){
                    var map;
                    var latlng = new google.maps.LatLng(<?php the_field('austin_latitude', 'option'); ?>, <?php the_field('austin_longitude', 'option'); ?>);
                    var myLatLng = new google.maps.LatLng(<?php the_field('austin_latitude', 'option'); ?>, <?php the_field('austin_longitude', 'option'); ?>);
                    var stylez = [
                      { stylers: [{
                        saturation: 0,
                        lightness: 0
                        }]
                      }
                    ];

                    var mapOptions = {
                      zoom: 15,
                      center: latlng,
                      scrollwheel: false,
                      mapTypeControlOptions: {
                        mapTypeIds: []
                      }
                    };
                    map = new google.maps.Map(document.getElementById("austin-map"), mapOptions);

                    var styledMapOptions = {
                      name: "I + M"
                    }

                    var jayzMapType = new google.maps.StyledMapType(stylez, styledMapOptions);

                    map.mapTypes.set('I + M', jayzMapType);
                    map.setMapTypeId('I + M');

                    var image = '<?php echo get_template_directory_uri(); ?>/assets/img/LocationPin.png';

                    var beachMarker = new google.maps.Marker({
                      position: myLatLng,
                      map: map,
                      animation: google.maps.Animation.DROP,
                      icon: image
                    });
                  }
                  gmapsBackgroundInit();
                </script>
              </div>

              <div class="location-info">
                <h3>Austin Office</h3>
                <p><?php the_field('austin_address', 'option') ?> <?php the_field('austin_address_2', 'option') ?></p>
                <p><?php the_field('austin_city', 'option') ?>, <?php the_field('austin_state', 'option') ?> <?php the_field('austin_zip', 'option') ?></p>
                <p>Phone: <?php the_field('austin_phone', 'option') ?></p>
                <p>Fax: <?php the_field('austin_fax', 'option') ?></p>
                <p>Email: <a href="mailto:<?php the_field('austin_email', 'option') ?>">Austin Area Info</a></p>
              </div>
            </div>
          </div><!-- close Austin Office -->


        </div>
      </div>
    </div>
  </section>


<?php
get_footer();
