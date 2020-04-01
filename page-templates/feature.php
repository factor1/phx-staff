<?php
/**
 * Template Name: Feature
 */


get_header();
get_template_part('parts/hero-feature');
?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<section class="featuresplits">
 <div class="expanded row">
      <div class="medium-6 columns fill-blue">
	      <div class="contentwrap right">
	      <?php the_field( 'left_col_1' ); ?>
	      </div>
      </div>
      
      <div class="medium-6 columns">
	      <div class="contentwrap">
	      <?php the_field( 'right_col_1' ); ?>
	      </div>
      </div>  
 </div>
 <div class="expanded row">
	 
	 
	  <div class="medium-6 medium-push-6 columns fill-blue">
	  		<div class="contentwrap">
	      <?php the_field( 'right_col_2' ); ?>
	      </div>
      </div>  
      
      
      <div class="medium-6 medium-pull-6 columns">
	      <div class="contentwrap right">
	      <?php the_field( 'left_col_2' ); ?>
	      </div>
      </div>
      

 </div>
</section>



  <section class="main-content">
    <div class="row">
      <div class="medium-8 medium-centered columns">
        <?php the_content(); ?>
      </div>
    </div>
  </section>
<?php endwhile; endif; ?>


<?php
get_footer();
