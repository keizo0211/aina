<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package aina
 */

get_header(); ?>

<section class="recommend-list">
	<div class="container">
		<h1><?php single_tag_title(); ?>物件</h1>

  <?php if ( have_posts() ) : ?>

  <?php if ( is_home() && ! is_front_page() ) : ?>
  <header>
   <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
  </header>
 <?php endif; ?>

 <?php /* Start the Loop */ ?>
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
<?php endif; ?>

</div>
</section>

<!-- 地域検索＆タグ -->
<div class="container">
 <div class="row">
  <div class="col l6 s12">
   <?php get_template_part( 'template-parts/area-serch', get_post_format() ); ?>
 </div>
 <div class="col l6 s12">
   <?php get_template_part( 'template-parts/request-search', get_post_format() ); ?>
 </div>
</div>
</div>
<!-- /地域検索＆タグ -->


<?php get_footer(); ?>
