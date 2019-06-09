<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Custom_Theme
 */


$args = array(  
	'post_type' => 'pizze',
	'post_status' => 'publish',
	'posts_per_page' => -1,
	'orderby' => 'date',
	'order' => 'ASC',
);

$loop = new WP_Query( $args );

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
		<div class="main-entry-content list-pizza">
			<?php
			while ( $loop->have_posts() ) : $loop->the_post();
			?>
			<div class="pizza-main">
				<div class="pizza-image">
					<?php 
					if (has_post_thumbnail()) {
						the_post_thumbnail();
					}else {
						echo '<img src="'.get_stylesheet_directory_uri().'/images/thumbnail-default-pizza.jpg" />';
					}
					?>
				</div>
				<div class="pizza-content">
					<div class="pizza-title">
						<?php the_title( sprintf( '<h2 class="entry-title" itemprop="headline">', esc_url( get_permalink() ) ), '</h2>' );?>
					</div>
					<div class="pizza-ingredients">
						<?php the_field('ingredienti'); ?>
					</div>
					<div class="pizza-price">
						&euro; <?php the_field('prezzo'); ?>
					</div>
				</div>
			</div>
			<?php
			endwhile;
		
			wp_reset_postdata();
			?>
		</div>
		<div class="sidebar-entry-content">
			<?php get_sidebar(); ?>
		</div>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
