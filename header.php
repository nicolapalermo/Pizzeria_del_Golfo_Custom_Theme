<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Custom_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="container">
			<div class="navbar">
				<div class="site-branding">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif; ?>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'navbar-menu',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</nav><!-- #site-navigation -->

				<div class="burger">
					<div class="line1"></div>
					<div class="line2"></div>
					<div class="line3"></div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<?php 
			if (!is_front_page()) {
				echo "<div class='container'>";
			}	
		?>		
			<div class="main-content">
