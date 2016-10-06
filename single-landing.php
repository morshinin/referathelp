<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package referathelp
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main col-md-8" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'landing' );

			// the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		<footer>
			
		</footer>

		</main><!-- #main -->
		<?php get_sidebar( 'landing' ); ?>
	</div><!-- #primary -->
	<div class="container">
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
									'terms'		=>	'24'
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
	</div>
<?php
get_footer();
