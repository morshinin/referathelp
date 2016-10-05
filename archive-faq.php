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
			/**
			 * Хитрый цикл, который выводит все таксономии типа questionstype(Темы вопросов), относящиеся к типу записи Вопрос-ответ(faq) как заголовки. А под каждым заголовком все посты, относящиеся к этой таксономии.
			 */

			$args = array( 'posts_per_page' => -1, 'post_type' => 'faq' );

			$query = new WP_Query( $args );
			$q = array();

			while ( $query->have_posts() ) {
				$query->the_post();

				$id = get_the_ID();
				$a = '<h3 class="archive_title-faq"><a data-toggle="collapse" href="#collapse-' . $id . '" aria-expanded="false" aria-controls="collapseExample">' . get_the_title() . '</a></h3>
						<div class="entry-content collapse" id="collapse-' . $id . '">
							<div class="well">' . get_the_content() . '</div>
					</div>';
				$categories = get_the_terms( get_the_ID(), 'questionstype' );

				foreach ($categories as $key => $category) {
					$b = '<h2>' . $category->name . '</h2>';
				}

				$q[$b][] = $a;

			}
			wp_reset_postdata();

			foreach ($q as $key => $values) {
				echo $key;
				foreach ($values as $value) {
					echo $value;
				}
			}
		?>

		</main><!-- #main -->
		<?php get_sidebar(); ?>
	</div><!-- #primary -->
<?php get_template_part( 'partials/content', 'cta3' ); ?>
<?php

get_footer();
