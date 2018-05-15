<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coolmat
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<!-- here we use the template_url code and then join our css
	file location onto the end -->
	<!-- <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/custom.css"> -->

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'coolmat' ); ?></a>

	<!-- this is our outer element that takes up the full page width -->
	<header id="masthead" class="site-header">

		<!-- this is our inner element that takes up 1380px -->
		<div class="header-inner container">

			<div class="site-branding">
				<!-- here we link to our logo from the assets folder -->
				<img src="<?php bloginfo('template_url'); ?>/assets/coolmat_logo.svg" class="logo">
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->

			<div class="language-select">
				<a lang="ko-KR" hreflang="ko-KR" href="<?php echo site_url('/kr'); ?>">KR</a> | 
				<a lang="en-US" hreflang="en-US" href="<?php echo site_url(); ?>">EN</a>
			</div>
		
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
