<?php
/**
 * Footer.php
 *
 * Template file closing the head of the docuement and containing the footer elements
 */

?>


  </main><!-- close Main -->

  <footer><!-- Footer -->
    <section class="footer-connect">
      <div class="row">
        <div class="small-12 large-6 columns text-center">
          <span class="email">
            <i class="fa fa-envelope"></i>
            <?php if( get_field( 'email', 'option' ) ) : ?>
              <a href="mailto:<?php the_field( 'email', 'option' ); ?>"><?php the_field( 'email', 'option' ); ?></a>
            <?php else : ?>
              <a href="mailto:info@phoenixstaff.com">info@phoenixstaff.com</a>
            <?php endif; ?>
          </span>

          <span class="fax">
            <i class="fa fa-fax"></i>
            <?php if( get_field( 'fax', 'option' ) ) : ?>
              <a href="fax:<?php the_field( 'fax', 'option' ); ?>"><?php the_field( 'fax', 'option' ); ?></a>
            <?php else : ?>
              <a href="fax:602.254.6363">602.254.6363</a>
            <?php endif; ?>
          </span>
        </div>

        <div class="small-12 large-6 columns text-center">
          <?php if( have_rows('social_profiles', 'option') ): ?>
            <span class="social">
              Let&rsquo;s Connect:
              <?php while ( have_rows('social_profiles', 'option') ) : the_row(); ?>
                <a href="<?php the_sub_field('social_url'); ?>"><?php the_sub_field('social_icon'); ?></a>
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
        <div class="row">
          <div class="small-6 columns">
            <?php if(is_active_sidebar('footer-widget')) dynamic_sidebar('footer-widget'); ?>
          </div>
          <div class="small-6 columns">
            <?php if(is_active_sidebar('footer-widget-2')) dynamic_sidebar('footer-widget-2'); ?>
          </div>
        </div>
        <div class="row">
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


<?php wp_footer(); ?>
</body>
</html>
