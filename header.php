<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Drossel
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dcs' ); ?></a>

	
	<header id="masthead" class="site-header <?php if (is_front_page()) {echo 'front-nav';}else{echo 'nofront-nav';} ?>">
		<div class="wrapp header-container">
			<div class="shopping-bag"></div>
			<div class="logo-container">
				<div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
			</div>
			<div class="site-header-burger">
				<button class="hamburger hamburger--spin menu-toggle" type="button">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
			</div>
			<nav id="site-navigation">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
	<?php
		if (is_front_page()) :
			echo '<div class="hero-banner wrapper group">'.do_shortcode('[slider id="348"]').'</div>';
		endif;
	?>
	<div id="content" class="site-content">
