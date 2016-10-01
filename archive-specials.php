<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package referathelp
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main col-md-8" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'specialsarch' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

			<?php 
				/**
				 * Выводим 3 вопроса-ответа
				 */
				global $post;
				$args = array(
						'post_type'	=>	'faq',
						'posts_per_page'	=>	3,
						'tax_query'		=>	array(
								array(
										'taxonomy'	=>	'questionstype',
										'terms'		=>	'25'
									),
							),						
					);
				$posts = get_posts( $args );

				if ( $posts ) {
					foreach ($posts as $post) : setup_postdata( $post );
						$title = get_the_title();
						echo $title;
				endforeach;
				}
				wp_reset_postdata();

			?>

		</main><!-- #main -->
		<?php get_sidebar(); ?>
	</div><!-- #primary -->

<?php

get_footer();
