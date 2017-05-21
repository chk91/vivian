<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<?php wp_enqueue_script( 'jquery' );?>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>
	

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header container" role="banner">
				<div class="header-wrapper container">
					<div class="header-bar">
						<div class="site-branding">
							<!--<h1 class="site-title screen-reader-text">-->

							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<img src="<?php echo get_template_directory_uri() . '../assets/icons/logo-white.svg' ?>" class="header-logo" alt="header-logo" />
							</a>

							<!--</h1>-->
							<p class="site-description"><?php bloginfo( 'description' ); ?></p>
						</div><!-- .site-branding -->


						<div class="nav-cancel">
							<img src="<?php echo get_template_directory_uri().'../assets/icons/cancel_icon.svg' ?>" />
						</div>
						<div class="main-nav" id="show-navi"><a id="show-nav" href="#">Toggle Nav</a></div>
							<nav id="site-navigation" class="main-navigation" role="navigation">
								<?php wp_nav_menu( array( 'container_class' => 'main-nav', 'container' => 'nav'));?>
							</nav>
						<!-- #site-navigation -->
					</div>
				</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">