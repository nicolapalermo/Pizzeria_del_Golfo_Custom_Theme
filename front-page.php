<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Custom_Theme
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

            <div class="section intro">
                <div class="overlay"></div>
                <div class="container">
                    <div class="content">
                        <?php dynamic_sidebar( 'frontpage-primasezione' ); ?>
                    </div>
                </div>
            </div>

            <div class="section second">
                <div class="container">
                    <div class="content">
                        <?php dynamic_sidebar( 'frontpage-secondasezione' ); ?>
                    </div>
                </div>
            </div>

            <div class="section third">
                <div class="overlay"></div>
                <div class="container">
                    <div class="content">
                        <?php dynamic_sidebar( 'frontpage-terzasezione' ); ?> 
                    </div>
                </div>
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
