<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kaneohe
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
	<div class="off-canvas-wrap" data-offcanvas>
		<div class="inner-wrap">
			<?php if ( get_header_image() ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
			</a>
			<?php endif; // End header image check. ?>
		
			<div id="page" class="site">
				<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'kaneohe' ); ?></a>
			
				<header id="masthead" class="site-header" role="banner">
					
					<?php if ( function_exists('icl_object_id') ) : ?>
					<div class="languages">
						<div class="row">
							<div class="small-12"><?php do_action('wpml_add_language_selector'); ?></div>
						</div>
					</div>
					<?php endif; ?>
					
					<?php /*<div class="site-branding">
						<?php
						if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
						endif;
			
						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo $description; ?></p>
						<?php
						endif; ?>
					</div><!-- .site-branding -->*/ ?>
					
					<div class="top-bar-left">
						<ul class="menu">
							<li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
						</ul>
					</div>
					
					<nav id="site-navigation" class="main-navigation top-bar" data-topbar role="navigation">
						<ul class="title-area">
							<li class="name"></li>
						</ul>
						<section class="right-small">
							<a class="right-off-canvas-toggle menu-icon" href="#"><span></span></a>
						</section>
					</nav>
					
					<nav class="right-off-canvas-menu">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav>
			
					<?php /*<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'kaneohe' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav><!-- #site-navigation -->*/ ?>
				</header><!-- #masthead -->
			
				<div id="content" class="site-content">
