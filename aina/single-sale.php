<?php
/**
* The template for displaying all single posts.
*
* @package aina
*/

get_header(); ?>

<div class="container">
 <section class="single-post" >
  <h1>売買物件<?php if ( post_custom('s-type') ) : ?>
   <?php echo post_custom("s-type")?><?php endif; ?>詳細</h1>
  <?php while ( have_posts() ) : the_post(); ?>

   <?php if ( post_custom('s-point') ) : ?>
    <h2>おすすめポイント</h2>
    <div class="point">
      <?php echo post_custom("s-point")?>&nbsp;
    </div>
  <?php endif; ?>

  <h2>物件概要</h2>
  <div class="row">
   <div class="col l6 m12 s12 ">
    <table class="table-date">
     <tr>
      <th>交通</th>
      <td>
       <?php if ( post_custom('s-access') ) : ?>
       <?php echo post_custom("s-train-line")?><?php echo post_custom("s-access")?>&nbsp;
      <?php endif; ?>
     </td>
    </tr>
    <tr>
     <th>住所</th>
     <td>
      <?php if ( post_custom('s-address') ) : ?>
      <?php echo post_custom("s-address")?>&nbsp;
     <?php endif; ?>
    </td>
   </tr>
   <tr>
    <th>価格</th>
    <td>
     <?php if ( post_custom('s-price') ) : ?>
     <?php echo post_custom("s-price")?>&nbsp;
    <?php endif; ?>
   </td>
  </tr>

  <?php if ( post_custom('administration-cost') ) : ?>
  <tr>
   <th>管理費</th>
   <td>
    <?php echo post_custom("administration-cost")?>
   </td>
  </tr>
 <?php endif; ?>

 <?php if ( post_custom('deposit') ) : ?>
 <tr>
  <th>積立金</th>
  <td>
   <?php echo post_custom("deposit")?>
  </td>
 </tr>
<?php endif; ?>

<?php if ( post_custom('s-right') ) : ?>
 <tr>
  <th>土地権利</th>
  <td>
   <?php echo post_custom("s-right")?>
  </td>
 </tr>
<?php endif; ?>

<?php if ( post_custom('s-area') ) : ?>
 <tr>
  <th>土地面積</th>
  <td>
   <?php echo post_custom("s-area")?> m<sup>2</sup>
  </td>
 </tr>
<?php endif; ?>

<?php if ( post_custom('s-floor-space') ) : ?>
 <tr>
  <th>建物面積</th>
  <td>
   <?php echo post_custom("s-floor-space")?> m<sup>2</sup>
  </td>
 </tr>
<?php endif; ?>

<?php if ( post_custom('s-area-m') ) : ?>
 <tr>
  <th>占有面積</th>
  <td>
   <?php echo post_custom("s-area-m")?> m<sup>2</sup>
  </td>
 </tr>
<?php endif; ?>

<?php if ( post_custom('s-roadside') ) : ?>
 <tr>
  <th>接道状況</th>
  <td>
   <?php echo post_custom("s-roadside")?>&nbsp;
  </td>
 </tr>
<?php endif; ?>

<?php if ( post_custom('s-usage') ) : ?>
 <tr>
  <th>用途地域</th>
  <td>
   <?php echo post_custom("s-usage")?>&nbsp;
  </td>
 </tr>
<?php endif; ?>

<?php if ( post_custom('s-construction') ) : ?>
 <tr>
  <th>構造</th>
  <td>
   <?php echo post_custom("s-construction")?>&nbsp;
  </td>
 </tr>
<?php endif; ?>

<?php if ( post_custom('s-period') ) : ?>
 <tr>
  <th>築年月</th>
  <td>
   <?php echo post_custom("s-period")?>&nbsp;
  </td>
 </tr>
<?php endif; ?>

<tr>
 <?php if ( post_custom('s-coverage') ) : ?>
 <th>建蔽率</th>
 <td>
  <?php echo post_custom("s-coverage")?> %
 </td>
</tr>
<?php endif; ?>

<?php if ( post_custom('s-far') ) : ?>
 <tr>
  <th>容積率</th>
  <td>
   <?php echo post_custom("s-far")?> %
  </td>
 </tr>
<?php endif; ?>
</table>
</div>

<div class="col l6 m12 s12">
 <table class="table-date">

<tr>
 <th>間取</th>
 <td>
  <?php if ( post_custom('s-layout') ) : ?>
  <?php echo post_custom("s-layout")?>&nbsp;
 <?php endif; ?>
</td>
</tr>

<?php if ( post_custom('s-parking-fee') ) : ?>
 <tr>
  <th>駐車場</th>
  <td>
   <?php echo post_custom("s-parking-fee")?>&nbsp;
  </td>
 </tr>
<?php endif; ?>

<?php if ( post_custom('s-transaction-type') ) : ?>
 <tr>
  <th>取引態様</th>
  <td>
   <?php echo post_custom("s-transaction-type")?>&nbsp;
  </td>
 </tr>
<?php endif; ?>

<?php if ( post_custom('management-form') ) : ?>
 <tr>
  <th>管理形態/方式</th>
  <td>
   <?php echo post_custom("management-form")?>&nbsp;
  </td>
 </tr>
<?php endif; ?>

<?php if ( post_custom('s-current-state') ) : ?>
 <tr>
  <th>現況</th>
  <td>
   <?php echo post_custom("s-current-state")?>&nbsp;
  </td>
 </tr>
<?php endif; ?>

  <?php if ( post_custom('s-deliver') ) : ?>
<tr>
 <th>引き渡し</th>
 <td>
  <?php echo post_custom("s-deliver")?>&nbsp;
</td>
</tr>
 <?php endif; ?>

 <?php if ( post_custom('s-feature') ) : ?>
 <tr>
  <th>特徴</th>
  <td>
   <?php echo post_custom("s-feature")?>&nbsp;
  </td>
 </tr>
<?php endif; ?>

<?php if ( post_custom('s-recital') ) : ?>
 <tr>
  <th>備考</th>
  <td>
   <?php echo post_custom("s-recital")?>&nbsp;
  </td>
 </tr>
<?php endif; ?>

</table>
</div>
</div>

<p class="estate-number">
 <?php if ( post_custom('number') ) : ?>
 物件番号：<?php echo post_custom("number")?>&nbsp;
<?php endif; ?>
</p>

<?php if ( post_custom('s-room-layout') ) : ?>
 <h2>間取り図</h2>
 <div class="room-layout">
  <?php
//画像のIDを取得
  $img_id=get_field('s-room-layout');

//functions.phpに記述した画像サイズ取得
  $size_m = "large";

//画像の表示用データ取得（この時の返り値はURL,幅,高さの順に配列）
  $img_m = wp_get_attachment_image_src ( $img_id , $size_m ) ;
  ?>
  <img src = "<?php echo $img_m[0] ; ?>" class="materialboxed" alt = "間取り図" >
 </div>
<?php endif; ?>

<h2>物件イメージ</h2>
<div class="estate-gallery">
 <?php the_content(); ?>
</div>

<?php if ( post_custom('s-map') ) : ?>
 <h2>地図</h2>
 <div class="g−map">
  <?php
  $location = get_field('s-map');
  if( !empty($location) ):
   ?>
  <div class="acf-map">
   <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
  </div>
 <?php endif; ?>
</div>
<?php endif; ?>

<h2>お問い合わせ</h2>
<div class="estate-contact">
 <?php echo do_shortcode( '[contact-form-7 id="123" title="個別問い合わせ"]' ); ?>
</div>

<div class="prev-next">
 <p><?php previous_post_link('%link', '<i class="fa fa-chevron-circle-left"></i>前の物件へ'); ?></p>
 <p class="next-post"><?php next_post_link('%link', '次の物件へ<i class="fa fa-chevron-circle-right"></i>'); ?></p>
</div>


<?php endwhile; // End of the loop. ?>
</section>
</div><!-- container -->

<?php get_footer(); ?>
