<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package aina
 */

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<!-- CSS  -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
<link href="<?php echo get_template_directory_uri(); ?>/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
</head>

<header class="main">
	<div class="container">
		<nav class="m-nav">
			<a href="#" data-activates="nav-mobile" class="button-collapse hide-on-large-only m-nav-icon"><i class="material-icons">menu</i></a>
			<?php wp_nav_menu(array( 'theme_location' => 'mobile', 'menu_class' => 'side-nav' , 'menu_id' => 'nav-mobile' ) ); ?>
		</nav>
		<div class="row">
			<div class="col offset-s2 s8 offset-m3 m6 l4 logo">
				<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/image/main-logo.png" alt="Aina Japan Estate"></a>
			</div>
			<div class="col s12 m6 l8 right-align header-nav hide-on-med-and-down">

				<?php wp_nav_menu(array( 'theme_location' => 'secondary', 'menu_class' => 'small-nav' ) ); ?>
				<nav class="rent-buy">
					<ul>
						<li class="<?php if ( is_page('rent') | is_single() | is_page('others') | is_tag() | is_category()){ echo ' current'; } ?><?php if ( is_singular('sale') ){ echo '-sale'; } ?>"><a href="/rent/">賃貸物件を探す</a></li>
						<li class="<?php if ( is_archive('sale') | is_singular('sale') ) { echo ' current'; } ?><?php if ( is_category() ){ echo '-sale'; } ?><?php if ( is_tag() ){ echo '-sale'; } ?>"><a href="/sale/">売買物件を探す</a></li>
					</ul>

				</nav>
			</div>
		</div>
	</div>

</header>

