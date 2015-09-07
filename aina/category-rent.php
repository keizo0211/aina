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
            'posts_per_page' => 12
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
    <div class="col l6 s12">
      <section class="area-search">
        <h1>エリアから探す</h1>
        <ul class="area-list">
          <li><a href="/kugenumakaigan/" class="waves-effect ">鵠沼海岸駅</a></li>
          <li><a href="/kataseenoshima/" class="waves-effect ">片瀬江ノ島駅</a></li>
          <li><a href="/tsujido/" class="waves-effect ">辻堂駅</a></li>
          <li><a href="/honkugenuma" class="waves-effect ">本鵠沼駅</a></li>
          <li><a href="/sichirigahama" class="waves-effect ">七里ガ浜駅</a></li>
          <li><a href="/inamuragasaki" class="waves-effect ">稲村ヶ崎駅</a></li>
          <li class="wide"><a href="/others" class="waves-effect ">その他のエリア</a></li>
        </ul>
      </section>
    </div>

    <div class="col l6 s12">
      <section class="request-search">
        <h1>こだわりの条件から探す</h1>
        <div class="tag-cloud">
          <?php wp_tag_cloud('smallest=12 & largest=12'); ?>
        </div>
      </section>
    </div>
  </div>
</div>

<?php get_footer(); ?>