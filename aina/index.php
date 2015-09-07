<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package aina
 */

get_header(); ?>

<section class="recommend-list">
	<div class="container">
		<h1>おすすめの賃貸物件</h1>

  <?php if ( have_posts() ) : ?>

   <?php if ( is_home() && ! is_front_page() ) : ?>
    <header>
     <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
    </header>
   <?php endif; ?>

   <?php /* Start the Loop */ ?>

   <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'paged' => $paged,
            'cat' => 38,
            'posts_per_page' => 12
        );

    $wp_query = new WP_Query($args);
?>
   <?php while ( have_posts() ) : the_post(); ?>


				<a href="<?php the_permalink() ?>" class="property-card">
					<div class="property-card-photo">
						<div class="property-card-photo-inner">
							<?php the_post_thumbnail('medium'); ?>
						</div>
					</div>
					<p class="place"><?php echo post_custom("access")?></p>
					<p>
						<?php if ( post_custom('layout') ) : ?>
							<?php echo post_custom("layout")?>&nbsp;
						<?php endif; ?>
						<?php if ( post_custom('area') ) : ?>
							<?php echo post_custom("area")?>m<sup>2</sup>
						<?php endif; ?>
					</p>
					<p>
						<?php if ( post_custom('house-rent') ) : ?>
							¥<?php echo post_custom("house-rent")?>
						<?php endif; ?>
				</p>
				</a>

   <?php endwhile; ?>

  <?php else : ?>

   <?php get_template_part( 'template-parts/content', 'none' ); ?>

  <?php endif; ?>

	</div>
</section>

  <div class="container pagenation-+3">
    <?php
    //Pagenation
    if (function_exists("pagination")) {
      pagination($additional_loop->max_num_pages);
    }
    ?>
  </div>

  <div class="container">
  	<div class="row">
  		<div class="col l7 s12">
  			<?php get_template_part( 'template-parts/area-serch', get_post_format() ); ?>
  			<?php get_template_part( 'template-parts/request-search', get_post_format() ); ?>
  		</div>

  		<div class="col l5 s12 fb-wrap">
  			<section class="fb-area">
  				<!--facebook page-->
  				<div class="fb-page" data-href="https://www.facebook.com/ainajapanestate" data-width="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/ainajapanestate"><a href="https://www.facebook.com/ainajapanestate">株式会社アイナジャパンエステート</a></blockquote></div></div>
  			</section>
  		</div>
  	</div>
  </div>


<aside class="bnr-area">
	<div class="container">
		<div class="row">
			<div class="col l12">
				<a href="/desired-condition/" ><img src="/wp-content/uploads/2015/08/bnr_desired_02.jpg" alt="希望条件登録"></a>
			</div>
		</div>
	</div>
</aside>


<?php get_footer(); ?>
