<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Custom_Theme
 */

?>

			</div><!-- .main-content -->
		<?php 
			if (!is_front_page()) {
				echo "</div><!-- .container -->";
			}	
		?>
	</div><!-- #content -->



	<div class="footer-widget-area">
		<div class="container">
			<div class="footer-widget-inside">
				<div class="footer-widget">
					<?php dynamic_sidebar( 'footer-1' ); ?>
				</div>
				<div class="footer-widget">
					<?php dynamic_sidebar( 'footer-2' ); ?>
				</div>
				<div class="footer-widget">
					<?php dynamic_sidebar( 'footer-3' ); ?>
				</div>
			</div>
		</div>
	</div>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="site-info">
				<div class="copyright">
					Copyright <?php echo date("Y") ?> &copy; Pizzeria del Golfo
				</div>
				<div class="policy-menu">
					<?php dynamic_sidebar( 'policy-menu' ); ?>
				</div>
				<div class="dev-credits">
					<a href="<?php echo esc_url( __( 'https://nicolapalermo.com', 'custom-theme' ) ); ?>" target="_blank" rel="noreferrer"`>
						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( 'Developed by %s', 'custom-theme' ), 'Nicola Palermo' );
						?>
					</a>
				</div>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
