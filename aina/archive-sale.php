<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *Template Name: 売買物件
 */


get_header(); ?>

<section class="recommend-list">
	<div class="container">
		<h1>売買物件</h1>

  <?php
  $loop = new WP_Query(array("post_type" => "sale"));
  if ( $loop->have_posts() ) : while($loop->have_posts()): $loop->the_post();
  ?>

  <a href="<?php the_permalink() ?>" class="property-card">
   <div class="property-card-photo">
    <div class="property-card-photo-inner">
     <?php the_post_thumbnail('medium'); ?>
    </div>
   </div>
   <p class="place"><?php echo post_custom("s-access")?></p>
   <?php if ( post_custom('s-area') ) : ?>
   <p>
    <?php echo post_custom("s-area")?>m<sup>2</sup>
   </p>
  <?php endif; ?>

  <?php if ( post_custom('s-area-m') ) : ?>
  <p>
   <?php echo post_custom("s-area-m")?> m<sup>2</sup>
  </p>
 <?php endif; ?>

 <p>
  <?php if ( post_custom('s-price') ) : ?>
  <?php echo post_custom("s-price")?>
 <?php endif; ?>
</p>
</a>

<?php endwhile; ?>

<?php the_posts_navigation(); ?>

<?php else : ?>

 <?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>


</div>
</section>

<?php get_footer(); ?>
