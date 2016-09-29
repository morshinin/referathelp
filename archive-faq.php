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
				get_template_part( 'template-parts/content', 'faq' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
		
		<?php 

			$args = array( 'posts_per_page' => -1, 'post_type' => 'faq' );

			$query = new WP_Query( $args );
			$q = array();

			while ( $query->have_posts() ) {
				$query->the_post();

				$a = get_the_title();
				$categories = get_terms( 'questionstype' );

				foreach ($categories as $key => $category) {
					$b = $category->name;
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

<?php

get_footer();
