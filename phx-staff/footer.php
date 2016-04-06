<?php
/**
 * Footer.php
 *
 * Template file closing the head of the document and containing the footer elements
 */

?>


  </main><!-- close Main -->

  <footer><!-- Footer -->
    <section class="footer-connect">
      <div class="row">
        <div class="small-12 large-6 columns text-center">
          <span class="email">
            <i class="fa fa-envelope"></i>
              <a href="mailto:info@phoenixstaff.com">info@phoenixstaff.com</a>
          </span>

          <span class="fax">
            <i class="fa fa-fax"></i>
              <a href="fax:602.254.6363">602.254.6363</a>
          </span>
        </div>

        <div class="small-12 large-6 columns text-center">
          <?php if( have_rows('social_profiles', 'option') ): ?>
            <span class="social">
              Let's Connect:
              <?php while ( have_rows('social_profiles', 'option') ) : the_row(); ?>
                <a href="<?php the_sub_field('social_url'); ?>" target="_blank"><?php the_sub_field('social_icon'); ?></a>
              <?php endwhile; ?>
            </span>
          <?php else : ?>
            <span class="social hide"></span>
          <?php endif; ?>
        </div>
      </div>
    </section>

    <section class="footer-top">
      <div class="hide-for-medium"><!-- Mobile only -->
        <div class="row collapse">
          <div class="small-6 columns">
            <h2>Phoenix Office</h2>
            <p><?php the_field('address', 'option') ?> <?php the_field('address_2', 'option') ?></p>
            <p><?php the_field('city', 'option') ?>, <?php the_field('state', 'option') ?> <?php the_field('zip', 'option') ?></p>
            <p>Phone: <?php the_field('phone', 'option') ?></p>
            <p>Fax: <?php the_field('fax', 'option') ?></p>
            <p>Email: <a href="mailto:<?php the_field('email', 'option') ?>">Phoenix Area Info</a></p>
          </div>
          <div class="small-6 columns">
            <h2>Las Vegas Office</h2>
            <p><?php the_field('vegas_address', 'option') ?> <?php the_field('vegas_address_2', 'option') ?></p>
            <p><?php the_field('vegas_city', 'option') ?>, <?php the_field('vegas_state', 'option') ?> <?php the_field('vegas_zip', 'option') ?></p>
            <p>Phone: <?php the_field('vegas_phone', 'option') ?></p>
            <p>Fax: <?php the_field('vegas_fax', 'option') ?></p>
            <p>Email: <a href="mailto:<?php the_field('vegas_email', 'option') ?>">Las Vegas Area Info</a></p>
          </div>
        </div>
        <div class="row collapse">
          <div class="small-6 columns">
            <h2>Austin Office</h2>
            <p><?php the_field('austin_address', 'option') ?> <?php the_field('austin_address_2', 'option') ?></p>
            <p><?php the_field('austin_city', 'option') ?>, <?php the_field('austin_state', 'option') ?> <?php the_field('austin_zip', 'option') ?></p>
            <p>Phone: <?php the_field('austin_phone', 'option') ?></p>
            <p>Fax: <?php the_field('austin_fax', 'option') ?></p>
            <p>Email: <a href="mailto:<?php the_field('austin_email', 'option') ?>">Austin Area Info</a></p>
          </div>
          <div class="small-6 columns">
            <?php if(is_active_sidebar('footer-widget-4')) dynamic_sidebar('footer-widget-4'); ?>
          </div>
        </div>
      </div>

      <div class="show-for-medium"><!-- Desktop only -->
        <div class="row">
          <div class="medium-3 footer-locations columns">
            <h2>Phoenix Office</h2>
            <p><?php the_field('address', 'option') ?> <?php the_field('address_2', 'option') ?></p>
            <p><?php the_field('city', 'option') ?>, <?php the_field('state', 'option') ?> <?php the_field('zip', 'option') ?></p>
            <p>Phone: <?php the_field('phone', 'option') ?></p>
            <p>Fax: <?php the_field('fax', 'option') ?></p>
            <p>Email: <a href="mailto:<?php the_field('email', 'option') ?>">Phoenix Area Info</a></p>
          </div>
          <div class="medium-3 footer-locations columns">
            <h2>Las Vegas Office</h2>
            <p><?php the_field('vegas_address', 'option') ?> <?php the_field('vegas_address_2', 'option') ?></p>
            <p><?php the_field('vegas_city', 'option') ?>, <?php the_field('vegas_state', 'option') ?> <?php the_field('vegas_zip', 'option') ?></p>
            <p>Phone: <?php the_field('vegas_phone', 'option') ?></p>
            <p>Fax: <?php the_field('vegas_fax', 'option') ?></p>
            <p>Email: <a href="mailto:<?php the_field('vegas_email', 'option') ?>">Las Vegas Area Info</a></p>
          </div>
          <div class="medium-3 footer-locations columns">
            <h2>Austin Office</h2>
            <p><?php the_field('austin_address', 'option') ?> <?php the_field('austin_address_2', 'option') ?></p>
            <p><?php the_field('austin_city', 'option') ?>, <?php the_field('austin_state', 'option') ?> <?php the_field('austin_zip', 'option') ?></p>
            <p>Phone: <?php the_field('austin_phone', 'option') ?></p>
            <p>Fax: <?php the_field('austin_fax', 'option') ?></p>
            <p>Email: <a href="mailto:<?php the_field('austin_email', 'option') ?>">Austin Area Info</a></p>
          </div>
          <div class="medium-3 columns">
            <?php if(is_active_sidebar('footer-widget-4')) dynamic_sidebar('footer-widget-4'); ?>
          </div>
        </div>
      </div>
    </section>

    <section class="footer-bottom">
      <a class="copyright" href="http://factor1studios.com" target="_blank">Site by <strong>factor1</strong></a>
    </section>
  </footer><!-- Close Footer -->


<?php wp_footer();

// If we are on the job market pages fire the JS
if( is_page('284') || is_page('318') || is_page('315') ): ?>
  <script>
   jobMarketFilter();
  </script>
<?php endif;?>


<!-- ======================
	            	Remodals! 
       ====================== -->


<div class="remodal" data-remodal-id="1share">
<button data-remodal-action="close" class="remodal-close"></button>
<h2>Share this Job with a friend</h2>
<h4><a href="<?php the_permalink();?>"><?php the_permalink();?></a></h4>


      			
</div>




</body>
</html>
