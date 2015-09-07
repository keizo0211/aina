<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package aina
 */

?>

<footer class="green">
  <div class="container">
    <div class="row">
      <div class="col l3 m5 s12 fotter-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/image/footer-logo.png" alt=""><br>
        <div class="bus-time">10:00 〜18:00 水曜日定休</div>
      </div>
      <div class="col l6 m7 s12 footer-info">
        <p class="contact">資料請求 / お問い合わせ <span class="tel">0466-34-1931</span></p>
        <p>鵠沼海岸 片瀬江ノ島 辻堂 湘南エリアの不動産 賃貸 売買<br>
          株式会社アイナジャパンエステート<br>神奈川県知事免許(3)第24676号
        </p>
      </div>
      <div class="col l3 s12 footer-links">
        <ul>
          <li><a href="/privacy">プライバシーポリシー</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container center-align">
      <i class="fa fa-copyright"></i> 株式会社アイナジャパンエステート
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/init-first.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/materialize.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.heightLine.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script>
<?php if(is_single()) : ?>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/g-map.js"></script>
<?php endif; ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

</body>
</html>
