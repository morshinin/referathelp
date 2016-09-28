<?php  
/**
* The template used for testimonials section
*
* @package WordPress
* @subpackage referathelp
* @since referathelp 1.0
*/
?>
<section class="testimonials main-margin">
	<div class="container">
		<div class="row">
			<h2 class="text-center">
				<?php _e( 'Отзывы', 'referathelp' ); ?>
			</h2>
		</div>
		<div class="row margin-third">
			<blockquote class="col-md-6">
				<div class="col-md-4">
					<p><strong><?php _e( 'Александр', 'referathelp' ); ?></strong></p>
					<p>
						<?php _e( 'Заказ:', 'referathelp' ); ?>
						<br>
						<?php _e( 'Курсовая', 'referathelp' ); ?>
					</p>
				</div>
				<div class="col-md-8">
					<p class="testimonials_text text-center">
						<?php _e( 'Отличная работа! Спасибо!', 'referathelp' ); ?>
					</p>
				</div>
			</blockquote>
			<blockquote class="col-md-6">
				<div class="col-md-4">
					<p><strong><?php _e( 'Ольга', 'referathelp' ); ?></strong></p>
					<p>
						<?php _e( 'Заказ:', 'referathelp' ); ?>
						<br>
						<?php _e( 'Реферат', 'referathelp' ); ?>
					</p>
				</div>
				<div class="col-md-8">
					<p class="testimonials_text text-center">
						<?php _e( 'В который раз выручили. Спасибо!', 'referathelp' ); ?>
					</p>
				</div>
			</blockquote>
		</div>	<!-- .row -->
		<div class="row text-center">
			<a href="#" class="btn btn-link">
				<?php _e( 'Посмотреть другие отзывы >>', 'referathelp' ); ?>
			</a>
		</div>	<!-- .row -->
	</div>	<!-- .container -->
</section>	<!-- .testimonials -->