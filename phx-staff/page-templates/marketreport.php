<?php
/**
 * Template Name: Market Report
 */

get_header();
get_template_part('parts/hero');

// Set PHP Variables for Locations used in All Open Positions
if( is_page('284') ):
  $location = 'Arizona';
  $open_positions_url = 'phoenix/';
elseif( is_page('318') ):
  $location = 'Austin';
  $open_positions_url = 'austin/';
elseif( is_page('315') ):
  $location = 'Las Vegas';
  $open_positions_url = 'las-vegas/';
endif;
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <section class="main-content">
    <div class="row">
      <div class="medium-12 columns">
        <?php the_content(); ?>
      </div>
      <hr>
    </div>
    <div class="row">
      <div class="medium-8 columns">
        <?php if( have_rows('market_report') ): while( have_rows('market_report') ): the_row();?>
          <div id="<?php the_sub_field('jobmarket_id');?>" class="market-report--job">

            <?php // Job Titles Based on IDs
            $job_id = get_sub_field('jobmarket_id');
            if( $job_id === 'netJava' ):
              $job_title = 'Software Developer - .NET/Java';
            elseif( $job_id === 'softwareDevManager' ):
              $job_title = 'Software Development Manager';
            elseif( $job_id === 'webDeveloper' ):
              $job_title = 'Web Developer (HTML / CSS / JS)';
            elseif( $job_id === 'networkEngineer' ):
              $job_title = 'Network Engineer';
            elseif( $job_id === 'systemsAdmin' ):
              $job_title = 'Systems Administrator';
            elseif( $job_id === 'endUserSupport' ):
              $job_title = 'End User Support (Helpdesk / Desktop)';
            elseif( $job_id === 'businessAnalyst' ):
              $job_title = 'Business Analyst';
            elseif( $job_id === 'projectManager' ):
              $job_title = 'Project Manager';
            elseif( $job_id === 'systemsEngineer' ):
              $job_title = 'Systems Engineer';
            elseif( $job_id === 'qaAnalyst' ):
              $job_title = 'QA Analyst';
            elseif( $job_id === 'databaseManager' ):
              $job_title = 'Database Manager';
            elseif( $job_id === 'BIDevelopers' ):
              $job_title = 'BI Developers/Manager';
            elseif( $job_id === 'networkAdministratorVoIP' ):
              $job_title = 'Network Administrator - VoIP';
            elseif( $job_id === 'phpDeveloper' ):
              $job_title = 'PHP Developer';
            elseif( $job_id === 'pythonDeveloper' ):
              $job_title = 'Python Developer';
            elseif( $job_id === 'systemsSpecialist' ):
              $job_title = 'Systems Implementation Specialist';
            elseif( $job_id === 'implementationManager' )
              $job_title = 'Implementation Manager';
            endif;
            ?>

            <h2><?php echo $job_title; ?></h2>

            <?php the_sub_field('jobmarket_content');?>

            <span><strong>Low Salary: <?php the_sub_field('jobmarket_lowsalary');?></strong></span>
            <br>
            <span><strong>High Salary: <?php the_sub_field('jobmarket_highsalary');?></strong></span>
            <br>
            <span><strong>Median Salary: <?php the_sub_field('jobmarket_mediansalary');?></strong></span>

          </div>
        <?php endwhile; endif;?>
      </div>
      <aside class="medium-4 columns text-center market-sidebar">
        <a href="<?php bloginfo('url');?>/open-opportunities/<?php echo $open_positions_url;?>" class="button">
          See All Open Positions
        </a>
        <p>View all current open opportunities in <?php echo $location;?></p>
      </aside>
    </div>
  </section>
<?php endwhile; endif; ?>

<?php
get_footer();
