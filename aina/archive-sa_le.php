<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *Template Name: 賃貸物件
 */

get_header(); ?>

<section class="recommend-list">
 <div class="container">
  <h1>賃貸物件</h1>



<?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $args = array(
            'paged' => $paged,
            'posts_per_page' => 10
        );

    $wp_query = new WP_Query($args);
?>
  <?php if ( have_posts() ) : ?>
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
<?php wp_reset_postdata(); ?><!-- 忘れずにリセットする必要がある -->
   <?php the_posts_navigation(); ?>

  <?php else : ?>

   <?php get_template_part( 'template-parts/content', 'none' ); ?>

  <?php endif; ?>



 </div>
</section>

<?php get_footer(); ?>