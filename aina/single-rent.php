<?php
/**
 * The template for displaying all single posts.
 *
 * @package aina
 */

get_header(); ?>

<div class="container">
	<section class="single-post" >

		<h1>賃貸物件 詳細</h1>
		<?php while ( have_posts() ) : the_post(); ?>

		<?php if ( post_custom('point') ) : ?>
		<h2>おすすめポイント</h2>
		<div class="point">
			<?php echo post_custom("point")?>&nbsp;
		</div>
	<?php endif; ?>

		<h2>物件概要</h2>
		<div class="row">
			<div class="col l6 m12 s12 ">
				<table class="table-date">
					<tr>
						<th>交通</th>
						<td>
							<?php if ( post_custom('access') ) : ?>
							<?php echo post_custom("train-line")?><?php echo post_custom("access")?>&nbsp;
						<?php endif; ?>
					</td>
				</tr>
				<tr>
					<th>住所</th>
					<td>
						<?php if ( post_custom('address') ) : ?>
						<?php echo post_custom("address")?>&nbsp;
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<th>タイプ</th>
				<td>
					<?php if ( post_custom('type') ) : ?>
					<?php echo post_custom("type")?>&nbsp;
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<th>階／階建</th>
			<td>
				<?php if ( post_custom('floor') ) : ?>
				<?php echo post_custom("floor")?>&nbsp;
			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<th>家賃</th>
		<td>
			<?php if ( post_custom('house-rent') ) : ?>
			¥<?php echo post_custom("house-rent")?>&nbsp;
		<?php endif; ?>
	</td>
</tr>
<tr>
	<th>共益費</th>
	<td>
		<?php if ( post_custom('common-benefit') ) : ?>
		¥<?php echo post_custom("common-benefit")?>&nbsp;
	<?php endif; ?>
</td>
</tr>
<tr>
	<th>礼金</th>
	<td>
		<?php if ( post_custom('key-money') ) : ?>
		<?php echo post_custom("key-money")?>ヶ月
	<?php endif; ?>
</td>
</tr>
<tr>
	<th>敷金</th>
	<td>
		<?php if ( post_custom('deposit') ) : ?>
		<?php echo post_custom("deposit")?>ヶ月
	<?php endif; ?>
</td>
</tr>
<tr>
	<th>保証金</th>
	<td>
		<?php if ( post_custom('guarantee-deposits') ) : ?>
		<?php echo post_custom("guarantee-deposits")?>&nbsp;
	<?php endif; ?>
</td>
</tr>
<tr>
	<th>敷引</th>
	<td>
		<?php if ( post_custom('deposit-discount') ) : ?>
		<?php echo post_custom("deposit-discount")?>&nbsp;
	<?php endif; ?>
</td>
</tr>
<tr>
	<th>面積</th>
	<td>
		<?php if ( post_custom('area') ) : ?>
		<?php echo post_custom("area")?> m<sup>2</sup>
	<?php endif; ?>
</td>
</tr>
</table>
</div>
<div class="col l6 m12 s12">
	<table class="table-date">
		<tr>
			<th>構造</th>
			<td>
				<?php if ( post_custom('construction') ) : ?>
				<?php echo post_custom("construction")?>&nbsp;
			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<th>間取</th>
		<td>
			<?php if ( post_custom('layout') ) : ?>
			<?php echo post_custom("layout")?>&nbsp;
		<?php endif; ?>
	</td>
</tr>
		<?php if ( post_custom('fire-insurance') ) : ?>
		<tr>
			<th>火災保険</th>
			<td>
				<?php echo post_custom("fire-insurance")?>&nbsp;
			</td>
		</tr>
	<?php endif; ?>
<tr>
	<th>間取詳細</th>
	<td>
		<?php if ( post_custom('layout-detail') ) : ?>
		<?php echo post_custom("layout-detail")?>&nbsp;
	<?php endif; ?>
</td>
</tr>
<tr>
	<th>築年月</th>
	<td>
		<?php if ( post_custom('period') ) : ?>
		<?php echo post_custom("period")?>&nbsp;
	<?php endif; ?>
</td>
</tr>

<?php if ( post_custom('transaction-type') ) : ?>
	<tr>
		<th>取引態様</th>
		<td>
			<?php echo post_custom("transaction-type")?>&nbsp;
		</td>
	</tr>
<?php endif; ?>

<?php if ( post_custom('direction') ) : ?>
	<tr>
		<th>向き</th>
		<td>
			<?php echo post_custom("direction")?>&nbsp;
		</td>
	</tr>
<?php endif; ?>

		<?php if ( post_custom('contract-term') ) : ?>
<tr>
	<th>契約期間</th>
	<td>
		<?php echo post_custom("contract-term")?>&nbsp;
</td>
</tr>
	<?php endif; ?>
		<?php if ( post_custom('parking-fee') ) : ?>
<tr>
	<th>駐車場料金</th>
	<td>
		<?php echo post_custom("parking-fee")?>&nbsp;
</td>
</tr>
	<?php endif; ?>
<tr>
	<th>入居時期</th>
	<td>
		<?php if ( post_custom('movein') ) : ?>
		<?php echo post_custom("movein")?>&nbsp;
	<?php endif; ?>
</td>
</tr>
<?php if ( post_custom('neighbor-plant') ) : ?>
	<tr>
		<th>バス停最寄施設</th>
		<td>
			<?php echo post_custom("neighbor-plant")?>&nbsp;
		</td>
	</tr>
<?php endif; ?>
<tr>
	<th>特色</th>
	<td>
		<?php if ( post_custom('feature') ) : ?>
		<?php echo post_custom("feature")?>&nbsp;
	<?php endif; ?>
</td>
</tr>

</table>
</div>
</div>

<p class="estate-number">
	<?php if ( post_custom('number') ) : ?>
	物件番号：<?php echo post_custom("number")?>&nbsp;
<?php endif; ?>
</p>

<?php if ( post_custom('room-layout') ) : ?>
	<h2>間取り図</h2>
	<div class="estate-gallery room-layout">
		<?php
		//画像のIDを取得
		$img_id=get_field('room-layout');

		//functions.phpに記述した画像サイズ取得
		$size_m = "medium";

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

<?php if ( post_custom('l-map') ) : ?>
<h2>地図</h2>
<div class="g−map">
<?php
$location = get_field('l-map');
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

<?php endwhile; // End of the loop. ?>
</section>
</div><!-- container -->

<div class="container">
	<ul class="page-nav">
		<li><?php previous_post_link('%link', '<i class="fa fa-caret-left"></i>前の物件'); ?></li>
		<li class="center-align"><a href="/rent/">賃貸トップ</a></li>
		<li class="right-align"><?php next_post_link('%link', '次の物件<i class="fa fa-caret-right"></i>'); ?></li>
	</ul>
</div>

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
