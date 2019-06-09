<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Custom_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php 
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			}else {
				echo '<img src="'.get_stylesheet_directory_uri().'/images/thumbnail-default.jpg" />';
			}
		?>
		<div class="overlay"></div>
	</header><!-- .entry-header -->

	

	<div class="entry-content">
		<div class="main-entry-content">
			<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'custom-theme' ),
				'after'  => '</div>',
			) );
			?>
		</div>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
