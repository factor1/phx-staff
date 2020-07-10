<?php
/**
 * The default template for the blog
 */

get_header();

$isBlog = is_home();
$isCat = is_category();
$isTag = is_tag();

$isPodcast = is_category('podcast');
?>


  <section class="banner">
    <div class="page-title">
      <?php if( $isPodcast ) : ?>
        <h1>Podcasts</h1>
      <?php elseif( $isBlog || $isCat || $isTag ) : ?>
        <h1>Blog</h1>
      <?php else : ?>
        <h1>Featured Jobs</h1>
      <?php endif; ?>
    </div>
  </section>

  <section class="main-content">
    <div class="row">
      <div class="medium-10 medium-centered columns">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class() ?>>
            <?php if(has_post_thumbnail()) : ?><!-- With Featured Image -->
              <div class="row with-thumbnail">
                <div class="medium-10 medium-centered columns">
                  <div class="row">
                    <div class="medium-4 columns">
                      <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="medium-8 columns">
                      <h2 class="blogroll-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                      <?php get_template_part('parts/meta' ); ?>
                      <?php the_excerpt(); ?>
                      <div class="read-more">
                        <a href="<?php the_permalink(); ?>" class="button round">Read More <i class="fa fa-arrow-right"></i></a>
                      </div>
                      <div class="tags">
                        <?php the_tags( '', ', ', '' ); ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php else : ?><!-- no Featured Image -->
              <div class="row">
                <div class="medium-10 medium-centered columns">
                  <h2 class="blogroll-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <?php get_template_part('parts/meta' ); ?>
                  <?php the_excerpt(); ?>
                  <div class="read-more">
                    <a href="<?php the_permalink(); ?>" class="button round">Read More <i class="fa fa-arrow-right"></i></a>
                  </div>
                  <div class="tags">
                    <?php the_tags( '', ', ', '' ); ?>
                  </div>
                </div>
              </div>
            <?php endif; ?>
          </article>
        <?php endwhile; ?>

        <?php get_template_part('parts/nav'); ?>

        <?php else : ?>
          <h2>There are no posts yet, check back soon!</h2>
        <?php endif; ?>
      </div>
    </div>
  </section>


<?php
get_footer();
