<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *Template Name: 賃貸物件 その他のエリア
 */

get_header(); ?>

<section class="recommend-list">
  <div class="container">
    <h1>賃貸物件 その他のエリア</h1>
  </div>

  <div class="container category-wrap">
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
      'paged' => $paged,
      'cat' => 31,
      'posts_per_page' => 10
      );
    $wp_query = new WP_Query($args);
    ?>
    <?php if ( have_posts() ) : ?>
    <h2>JR東海道線/小田急江ノ島線 藤沢駅の物件</h2>
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
<?php endif; ?>
</div>


<!-- カテゴリー -->
  <div class="container category-wrap">
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
      'paged' => $paged,
      'cat' => 34,
      'posts_per_page' => 10
      );
    $wp_query = new WP_Query($args);
    ?>
    <?php if ( have_posts() ) : ?>
    <h2>JR東海道線 茅ヶ崎駅</h2>
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
<?php endif; ?>
</div>
<!-- /カテゴリー -->

<!-- カテゴリー -->
  <div class="container category-wrap">
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
      'paged' => $paged,
      'cat' => 29,
      'posts_per_page' => 10
      );
    $wp_query = new WP_Query($args);
    ?>
    <?php if ( have_posts() ) : ?>
    <h2>江ノ島電鉄 柳小路駅の物件</h2>
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
<?php endif; ?>
</div>
<!-- /カテゴリー -->


<!-- カテゴリー -->
  <div class="container category-wrap">
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
      'paged' => $paged,
      'cat' => 30,
      'posts_per_page' => 10
      );
    $wp_query = new WP_Query($args);
    ?>
    <?php if ( have_posts() ) : ?>
    <h2>江ノ島電鉄 鵠沼駅の物件</h2>
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
<?php endif; ?>
</div>
<!-- /カテゴリー -->

<!-- カテゴリー -->
  <div class="container category-wrap">
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
      'paged' => $paged,
      'cat' => 36,
      'posts_per_page' => 10
      );
    $wp_query = new WP_Query($args);
    ?>
    <?php if ( have_posts() ) : ?>
    <h2>江ノ島電鉄 湘南海岸公園駅の物件</h2>
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
<?php endif; ?>
</div>
<!-- /カテゴリー -->

<!-- カテゴリー -->
  <div class="container category-wrap">
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
      'paged' => $paged,
      'cat' => 37,
      'posts_per_page' => 10
      );
    $wp_query = new WP_Query($args);
    ?>
    <?php if ( have_posts() ) : ?>
    <h2>江ノ島電鉄 江ノ島の物件</h2>
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
<?php endif; ?>
</div>
<!-- /カテゴリー -->

<!-- カテゴリー -->
  <div class="container category-wrap">
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
      'paged' => $paged,
      'cat' => 1,
      'posts_per_page' => 10
      );
    $wp_query = new WP_Query($args);
    ?>
    <?php if ( have_posts() ) : ?>
    <h2>その他</h2>
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
<?php endif; ?>
</div>
<!-- /カテゴリー -->

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