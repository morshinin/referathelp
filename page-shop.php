<?php
/**
 * Template Name: Магазин
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
		<main id="main" class="site-main" role="main">
			<div class="container padding-secondary">
			<?php 
				while ( have_posts() ) : the_post();
						
				the_title( '<h1 class="text-center">', '</h1>' );	
				endwhile;
			?>
				<p class="lead text-center">
					<?php _e( 'У нас вы найдете самые свежие, проверенные и хорошо оформленные работы', 'referathelp' ); ?>
				</p>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<?php 
						if ( shortcode_exists( 'searchandfilter' ) ) {
						echo do_shortcode( '[searchandfilter fields="search,product_cat,product_tag" submit_label="Найти" class="rh_shop_search" search_placeholder="Введите тему" taxonomies="product_tag,product_cat" post_types="product" hierarchical=",1"]' );
						}
						?>
					</div>
						
				</div>	<!-- .row -->
				<div class="row text-center">
					<small>
						<a href="<?php echo esc_url(home_url( '/shop' )); ?>" class="btn-btn-link">
							<?php _e( 'Посмотреть весь каталог', 'referathelp' ); ?>
						</a>
					</small>
				</div>
				<div class="row text-center padding-secondary">
					<div class="col-md-4 ">
						<p>
							<?php _e( 'Готовое оформление', 'referathelp' ); ?>
						</p>
					</div>
					<div class="col-md-4">
						<p>
							<?php _e( 'Антиплагиат не меньше 80%', 'referathelp' ); ?>
						</p>
					</div>
					<div class="col-md-4">
						<p>
							<?php _e( 'Минимум воды', 'referathelp' ); ?>
						</p>
					</div>
				</div>
			</div>

		</main><!-- #main -->
		<?php /*get_sidebar();*/ ?>
	</div><!-- #primary -->

<?php

get_footer();
