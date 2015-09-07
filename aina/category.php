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
  <h1>賃貸物件</h1>
</div>

  <div class="container category-wrap">
  <?php if ( have_posts() ) : ?>
   <h2><?php $category = get_the_category(); echo $category[0]->cat_name; ?>の物件</h2>
  <?php else : ?>
   <h2><?php wp_title(''); ?>の物件</h2>
  <?php endif; ?>





<?php if ( have_posts() ) : ?>
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

  <?php else : ?>
　　<p class="no-area">お探しのエリアでの物件がありませんでした。</p>
  <?php endif; ?>

	</div>
</section>

<!-- ページネーション -->
<?php get_template_part( 'template-parts/page-nation', get_post_format() ); ?>
<!-- /ページネーション -->

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
