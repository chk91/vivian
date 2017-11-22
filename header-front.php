<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
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
								<div class="header-logo-front"></div>
							</a>

							<!--</h1>-->
							<p class="site-description"><?php bloginfo( 'description' ); ?></p>
						</div><!-- .site-branding -->

						<div class="main-nav" id="show-navi">
							<i class="fa fa-bars hamburger" aria-hidden="true"></i>
						</div>
							<nav id="site-navigation" class="main-navigation" role="navigation">
								<?php wp_nav_menu( array( 'container_class' => 'main-nav', 'container' => 'nav'));?>
							</nav>
						<!-- #site-navigation -->
					</div>
				</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">