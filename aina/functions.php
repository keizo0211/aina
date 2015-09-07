<?php
/**
 * aina functions and definitions
 *
 * @package aina
 */

if ( ! function_exists( 'aina_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function aina_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on aina, use a find and replace
	 * to change 'aina' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'aina', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'aina' ),
		'secondary' => esc_html__( 'Sub Menu', 'aina' ),
		'mobile' => esc_html__( 'Mobile Menu', 'aina' )
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'aina_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // aina_setup
add_action( 'after_setup_theme', 'aina_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function aina_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'aina_content_width', 640 );
}
add_action( 'after_setup_theme', 'aina_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function aina_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'aina' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'aina_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function aina_scripts() {
	wp_enqueue_style( 'aina-style', get_stylesheet_uri() );

	wp_enqueue_script( 'aina-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'aina-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'aina_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


// WordPressのバージョンを消す
remove_action('wp_head','wp_generator');

// アドミンバーの非表示
add_filter( 'show_admin_bar', '__return_false' );


// メニューのムダなクラスを外す
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var) {
return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
}

//メディアのリンクのデフォルトをなしにする
function set_image_link_type(){
	$image_set = get_option('image_default_link_type');
	if($image_set !== 'none'){
		update_option('image_default_link_type', 'none');
	}
}
add_action('admin_init', 'set_image_link_type', 10);


//投稿メニュー名を変更
function change_post_menu_label() {
	global $menu;
	global $submenu;
	$menu[5][0] = '賃貸物件';
	$submenu['edit.php'][5][0] = '賃貸物件一覧';
	$submenu['edit.php'][10][0] = '新しい賃貸物件';
	$submenu['edit.php'][16][0] = 'タグ';
	//echo ”;
}
function change_post_object_label() {
	global $wp_post_types;
	$labels = &$wp_post_types['post']->labels;
	$labels->name = '賃貸物件';
	$labels->singular_name = '賃貸物件';
	$labels->add_new = _x('作る', '賃貸物件');
	$labels->add_new_item = '新しい賃貸物件';
	$labels->edit_item = '賃貸物件の編集';
	$labels->new_item = '新しい賃貸物件';
	$labels->view_item = '賃貸物件を表示';
	$labels->search_items = '賃貸物件検索';
	$labels->not_found = '賃貸物件が見つかりませんでした';
}
add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );


//カスタム投稿　売買物件
register_post_type(
'sale',
  array(
  'label' => '売買物件',
  'hierarchical' => false,
  'public' => true,
  'query_var' => false,
  'menu_position' => 5,
  'has_archive' => true,
  'supports' => array('title','editor','author'),
  'supports' => array('title','editor','thumbnail')
  )
);

  /* カスタムタクソノミーを定義 */
  register_taxonomy(
    'sale_cat',
    'sale',
    array(
    'label' => 'カテゴリー',
    'hierarchical' => true,
    'rewrite' => array('slug' => 'sale')
    )
  );
  /* カスタムタクソノミーを定義ここまで */

  /* 管理画面一覧にカテゴリを表示 */
  function manage_sale_columns($columns) {
    $columns['sale_category'] = "カテゴリー";
    return $columns;
  }
  function add_sale_column($column_name, $post_id){
    if( $column_name == 'sale_category' ) {
    //カテゴリー名取得
    if( 'sale_category' == $column_name ) {
        $sale_category = get_the_term_list($post_id, 'sale_cat', '', ', ', '' );
    }
    //該当カテゴリーがない場合「なし」を表示
    if ( isset($sale_category) && $sale_category ) {
        echo $sale_category;
    } else {
        echo __('None');
    }
    }
  }
  add_filter('manage_edit-sale_columns', 'manage_sale_columns');
  add_action('manage_posts_custom_column',  'add_sale_column', 10, 2);
  /* 管理画面一覧にカテゴリを表示ここまで */


//Pagenation
function pagination($pages = '', $range = 2)
{
     $showitems = ($range * 2)+1;//表示するページ数（５ページを表示）

     global $paged;//現在のページ値
     if(empty($paged)) $paged = 1;//デフォルトのページ

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;//全ページ数を取得
         if(!$pages)//全ページ数が空の場合は、１とする
         {
             $pages = 1;
         }
     }

     if(1 != $pages)//全ページが１でない場合はページネーションを表示する
     {

		 echo "<ul class=\"pagination\">\n";
		 //Prev：現在のページ値が１より大きい場合は表示

         echo "<li";
         if($paged > 1) echo " class=\"prev\"><a href='".get_pagenum_link($paged - 1)."'";
         echo "><i class=\"material-icons\">chevron_left</i>";
         echo "</a>";
         echo "</li>\n";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                //三項演算子での条件分岐
                echo ($paged == $i)? "<li class=\"active\">".$i."</li>\n":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>\n";
             }
         }
		//Next：総ページ数より現在のページ値が小さい場合は表示
  echo "<li";
  if ($paged < $pages) echo " class=\"next\"><a href=\"".get_pagenum_link($paged + 1)."\"";
  echo "><i class=\"material-icons\">chevron_right</i>";
  if ($paged < $pages) echo "</a>";
  echo "</li>\n";
  echo "</ul>\n";



     }
}

// 半角変換
function convert_content( $data ) {
	$convert_fields = array( 'post_title', 'post_content' );
	foreach ( $convert_fields as $convert_field ) {
		$data[$convert_field] = mb_convert_kana( $data[$convert_field], 'aKV', 'UTF-8' );
	}
	return $data;
}
add_filter( 'wp_insert_post_data', 'convert_content' );


// キャプションの横幅を削除
add_shortcode('caption', 'my_img_caption_shortcode');

function my_img_caption_shortcode($attr, $content = null) {
 if ( ! isset( $attr['caption'] ) ) {
  if ( preg_match( '#((?:<a [^>]+>\s*)?<img [^>]+>(?:\s*</a>)?)(.*)#is', $content, $matches ) ) {
   $content = $matches[1];
   $attr['caption'] = trim( $matches[2] );
  }
 }

 $output = apply_filters('img_caption_shortcode', '', $attr, $content);
 if ( $output != '' )
  return $output;

 extract(shortcode_atts(array(
  'id' => '',
  'align' => 'alignnone',
  'width' => '',
  'caption' => ''
 ), $attr));

 if ( 1 > (int) $width || empty($caption) )
  return $content;

 if ( $id ) $id = 'id="' . esc_attr($id) . '" ';

 return '<p ' . 'class="wp-caption ' . esc_attr($align) . '">'
 . do_shortcode( $content ) . '<p class="wp-caption-text">' . $caption . '</p></p>';
}


//Google Maps Shortcode
function do_googleMaps($atts, $content = null) {
   extract(shortcode_atts(array(
      "width" => '100%',
      "height" => '300',
      "src" => ''
   ), $atts));
   return '<iframe width="'.$width.'" height="'.$height.'" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="'.$src.'&output=embed" ></iframe>';
}
add_shortcode("googlemap", "do_googleMaps");