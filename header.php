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
				<div class="header-wrapper">
					<div class="header-bar">
						<div class="site-branding">
							<!--<h1 class="site-title screen-reader-text">-->

							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<img src="<?php echo get_template_directory_uri() . '../assets/icons/logo-white.svg' ?>" class="header-logo" alt="header-logo" />
							</a>

							<!--</h1>-->
							<p class="site-description"><?php bloginfo( 'description' ); ?></p>
						</div><!-- .site-branding -->

						<div class="nav-button">
								<img src="<?php echo get_template_directory_uri() . '../assets/icons/menu-white.png' ?>" class="header-logo" alt="hamburger-menu" />
						</div>

						</nav><!-- #site-navigation -->
					</div>
				</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">