<?php
/**
 * Template Name: Преимущества
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package referathelp
 */

get_header(); ?>
	<div id="primary" class="content-area container">
	<?php woocommerce_breadcrumb(); ?>
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'partials/content', 'benefits' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
		<?php /*get_sidebar();*/ ?>
	</div><!-- #primary -->

<?php

get_footer();
