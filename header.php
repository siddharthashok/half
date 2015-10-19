<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Half
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation.css" />
<?php wp_head(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/snap.svg-min.js"></script>

<style>
.cover {
  background: url('<?php echo get_theme_mod( 'image_control' ); ?>');
}

</style>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'half' ); ?></a>

	<header id="masthead" class="site-header large-6 columns left_col cover" role="banner">
		<div class="tint"></div>
		<a href="#" id="menu_open">Menu</a>

		<nav id="menu_wrap" class="main-navigation" role="navigation">
			<a href="#" id="menu_close">Close</a>
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'half' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->

		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
			<p>Social</p>
			<a href="<?php echo get_theme_mod( 'twitter' ); ?>">Twitter</a>
			<a href="<?php echo get_theme_mod( 'facefook' ); ?>">Facebook</a>
			<a href="<?php echo get_theme_mod( 'Instagram' ); ?>">Instagram</a>
			<a href="<?php echo get_theme_mod( 'youtube' ); ?>">Youtube</a>
			<a href="<?php echo get_theme_mod( 'github' ); ?>">Github</a>
		</div><!-- .site-branding -->


		<nav id="menu" class="menu">
						<button class="menu__handle"><span>Menu</span></button>
						<div class="menu__inner">
							<ul>
								<li><a href="#">Save settings</a></li>
								<li><a href="#">Revert all changes</a></li>
								<li><a href="#">Save as template</a></li>
								<li><a href="#">Exit without saving</a></li>
								<li><a href="#">Exit without saving</a></li>
								<li><a href="#">Exit without saving</a></li>
								<li><a href="#">Exit without saving</a></li>
							</ul>
<p>
Cupcake ipsum dolor sit amet chocolate bar. Bear claw candy canes cake pudding ice cream I love dragée oat cake. Applicake pie halvah. Sesame snaps cupcake ice cream I love I love cookie I love. Soufflé jelly-o donut cupcake. I love pastry marshmallow marzipan applicake I love carrot cake. Oat cake icing oat cake. Toffee gummi bears dragée I love toffee I love icing I love brownie. Toffee biscuit gummi bears jelly beans pie.
</p>
<p>
Lemon drops jelly candy I love chupa chups I love. Tootsie roll sweet gummies. Chocolate cookie lollipop gummi bears wafer candy canes. Gummi bears dessert cupcake. Tart powder jelly beans pie. Applicake I love croissant.
</p>
<p>
Topping cookie powder powder cake. Wafer gingerbread applicake sweet cake ice cream soufflé sweet. Icing sugar plum oat cake toffee icing. I love candy canes I love dessert sweet cotton candy gummies. Wafer powder chocolate marshmallow I love tootsie roll I love macaroon. Fruitcake apple pie ice cream carrot cake jelly wypas.
</p>
<p>
I love icing wafer I love. Bonbon dessert cotton candy dessert pie brownie cupcake croissant sweet roll. Cake jelly beans tart marshmallow wafer. Dragée chupa chups bear claw I love cupcake danish. I love gingerbread soufflé faworki muffin I love pudding gingerbread I love. Donut tootsie roll chocolate cotton candy pastry marshmallow brownie cotton candy. Marshmallow cookie wafer chocolate cake.
</p>
						</div>
						<div class="morph-shape" data-morph-open="M-10,100c0,0,44-95,290-95c232,0,290,95,290,95" data-morph-close="M-10,100c0,0,44,95,290,95c232,0,290-95,290-95">
							<svg width="100%" height="100%" viewBox="0 0 560 200" preserveAspectRatio="none">
								<path fill="none" d="M-10,100c0,0,44,0,290,0c232,0,290,0,290,0"/>
							</svg>
						</div>
		</nav>

	</header><!-- #masthead -->

	<div id="content" class="site-content large-6 columns right_col">
