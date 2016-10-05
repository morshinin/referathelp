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
	<?php woocommerce_breadcrumb(); ?>
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
		<footer>
			<h3>
				<?php _e( 'Вопрос-ответ', 'referathelp' ); ?>
			</h3>
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
						$id = get_the_ID();
						$content = get_the_content();
						echo '<p class="archive_title-faq"><a data-toggle="collapse" href="#collapse-' . $id . '" aria-expanded="false" aria-controls="collapseExample">' . $title . '</a></p>
						<div class="entry-content collapse" id="collapse-' . $id . '">
							<div class="well">' . $content . '</div>
					</div>';
				endforeach;
				}
				wp_reset_postdata();

			?>
			<p>
				<a href="<?php echo esc_url(home_url('/faq')); ?>" class="btn btn-link">
					<?php _e( 'Посмотрите все вопросы >>', 'referathelp' ); ?>
				</a>
			</p>
		</footer>
		</main><!-- #main -->
		<?php get_sidebar(); ?>
	</div><!-- #primary -->
<?php get_template_part( 'partials/content', 'cta3' ); ?>
<?php

get_footer();
