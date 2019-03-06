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

  <section class="offices">
    <div class="row">
      <div class="medium-10 medium-centered columns">
        <div class="row">
          <div class="medium-4 columns"><!-- Phoenix Office -->
            <div class="location-item">
              <div class="location-map">
                <div id="phoenix-map" style="width:100%; height:270px; z-index:0;"></div>
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
              </div>

              <div class="location-info">
                <h3>Austin Office</h3>
                <p><?php the_field('austin_address_1', 'option') ?> <?php the_field('austin_address_2', 'option') ?></p>
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

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTFWPHuyTF2hM6hGXXLSbf41TRLTSPbJY&callback=initMaps" type="text/javascript"></script>
  <script>
    var mapsArray = [
      {
        id: 'phoenix-map',
        lat:  <?php the_field('latitude', 'option'); ?>,
        long: <?php the_field('longitude', 'option'); ?>,
      },
      {
        id: 'vegas-map',
        lat: <?php the_field('vegas_latitude', 'option'); ?>,
        long: <?php the_field('vegas_longitude', 'option'); ?>,
      },
      {
        id: 'austin-map',
        lat: <?php the_field('austin_latitude', 'option'); ?>,
        long: <?php the_field('austin_longitude', 'option'); ?>,
      }
    ];


    function gmapsBackgroundInit(id, lat, long){
      var map;
      var latlng = new google.maps.LatLng(lat, long);
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
      map = new google.maps.Map(document.getElementById(id), mapOptions);

      var styledMapOptions = {
        name: "I + M"
      }

      var jayzMapType = new google.maps.StyledMapType(stylez, styledMapOptions);

      map.mapTypes.set('I + M', jayzMapType);
      map.setMapTypeId('I + M');

      var image = '<?php echo get_template_directory_uri(); ?>/assets/img/LocationPin.png';

      var beachMarker = new google.maps.Marker({
        position: latlng,
        map: map,
        animation: google.maps.Animation.DROP,
        icon: image
      });
    }

    function initMaps() {
      for(var i = 0; i < mapsArray.length; i++) {
        gmapsBackgroundInit(mapsArray[i].id, mapsArray[i].lat, mapsArray[i].long);
      }
    }
  </script>

<?php
get_footer();
