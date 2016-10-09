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
		$id = get_the_ID();
		$terms = wp_get_post_terms( $id, 'customworktype', array( 'fields' => 'all' ) );
		// Пишем в переменную все метки типа customworktype, чтобы по ним выводить связанные отзывы и вопросы
		$rh_term = $terms[0]->term_id; 
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
	<div class="container margin-secondary">
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
									'taxonomy'	=>	'customworktype',
									'terms'		=>	array( $rh_term ),
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
	</div>	<!-- .container -->
	<div class="container margin-secondary">
					<?php 
		$args = array(
			'tax_query'	=> array(
					array(
							'taxonomy'	=>	'customworktype',
							'tag_ID'		=>	'59'
						)
				),
			'posts_per_page' => '2',
			'post_type'	=>	'rh_testimonials'
		);
		$args2 = array( 
			'tax_query'	=> array(
					array(
							'taxonomy'	=>	'customworktype',
							'terms'		=>	array( $rh_term ),
						),
				),
			'post_type'	=>	'rh_testimonials',
			'posts_per_page'	=>	'2'
		 );
		$testimonial_query = new WP_Query( $args2 );
		while ($testimonial_query->have_posts()) : $testimonial_query->the_post(); 
		$title = get_the_title();
		$content = get_the_content();
		$work_type = 'rh_customer_purchase';
		$field = get_field_object( $work_type );
		?>
		<blockquote class="col-md-6">
			<div class="col-md-3">
				<p><strong><?php echo $title; ?></strong></p>
				<small>
					<?php echo $field['label']; /* Достаем и выводим название поля */?>
					<br>
					<?php echo $field['value']; /* Достаем и выводим значение поля */ ?>
				</small>
			</div>
			<div class="col-md-9">
				<p class="testimonials_text text-center">
					<?php echo $content; ?>
				</p>
			</div>
		</blockquote>
		<?php 
		endwhile; 
		wp_reset_postdata();
		?>
	</div>	<!-- .container -->
<?php
get_footer();
