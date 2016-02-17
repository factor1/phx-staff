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
            <?php if(is_active_sidebar('footer-widget')) dynamic_sidebar('footer-widget'); ?>
          </div>
          <div class="small-6 columns">
            <?php if(is_active_sidebar('footer-widget-2')) dynamic_sidebar('footer-widget-2'); ?>
          </div>
        </div>
        <div class="row collapse">
          <div class="small-6 columns">
            <?php if(is_active_sidebar('footer-widget-3')) dynamic_sidebar('footer-widget-3'); ?>
          </div>
          <div class="small-6 columns">
            <?php if(is_active_sidebar('footer-widget-4')) dynamic_sidebar('footer-widget-4'); ?>
          </div>
        </div>
      </div>

      <div class="show-for-medium"><!-- Desktop only -->
        <div class="row">
          <div class="medium-3 columns">
            <?php if(is_active_sidebar('footer-widget')) dynamic_sidebar('footer-widget'); ?>
          </div>
          <div class="medium-3 columns">
            <?php if(is_active_sidebar('footer-widget-2')) dynamic_sidebar('footer-widget-2'); ?>
          </div>
          <div class="medium-3 columns">
            <?php if(is_active_sidebar('footer-widget-3')) dynamic_sidebar('footer-widget-3'); ?>
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

</body>
</html>
