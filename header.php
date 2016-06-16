<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Deep_Happiness
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'deephappiness' ); ?></a>

	<!-- Header -->
	<header class="site-header" role="banner">
		<div id="top-banner">
			<div class="container">
				<a href="/"><img src="img/top-logo.png" alt="Deep Happiness; An inside-out path toward living fully." class="top-logo"></a>
			</div><!-- .container -->
		</div><!-- #top-banner -->
		<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<!-- Brand and toggle mobile button -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#dh-menu" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div><!-- .navbar-header -->

				<!-- Nav links collection that will be collapsed -->
				<?php
					// If the menu (WP admin area) is not set, then the "menu_class" is applied to "container". In other words, it overwrites the "container_class". Ref: http://wordpress.org/support/topic/wp_nav_menu-menu_class-usage-bug?replies=4

					wp_nav_menu(
						array(

							'theme_location'	=> 'primary',
							'container'			=> 'div',
							'container_class'	=> 'collapse navbar-collapse',
							'container_id'		=> 'dh-menu',
							'menu_class'		=> 'nav navbar-nav navbar-left',

						)
					);
				?>

			</div><!-- .container -->
		</nav><!-- .navbar -->
	</header><!-- header -->
