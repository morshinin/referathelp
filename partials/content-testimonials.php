<?php  
/**
* The template used for testimonials section
*
* @package WordPress
* @subpackage referathelp
* @since referathelp 1.0
*/
?>
<section class="testimonials">
	<div class="container">
		<div class="row">
			<h2 class="text-center">
				<?php _e( 'Отзывы', 'referathelp' ); ?>
			</h2>
		</div>
		<div class="row margin-third">
			<?php 
				global $post;
				if ( is_front_page() ) {
					// на главной странице отображаем только два отзыва
					$post_count = 2;
				} else {
					// на всех остальных страницах все отзывы
					$post_count = -1;
				}
				$args = array( 'posts_per_page' => $post_count, 'post_type' => 'rh_testimonials' );
				$testimonials_posts = get_posts( $args );
				if ( $testimonials_posts ) {
					// Выводим записи отзывов, если они есть
					foreach ( $testimonials_posts as $post ) : setup_postdata( $post );
					$title = get_the_title();
					$content = get_the_content();
					$work_type = 'rh_customer_purchase';
					$field = get_field_object( $work_type );	/* Забираем произвольное поле, созданное плагином ACF, используя его тег. В переменную пишется все, что относится к произвольному полю в переменной $work_type. */
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
					endforeach;
					
				} 
					else {
						// если записей отзывов нет, выводим тестовые записи
					?>
					<blockquote class="col-md-6">
						<div class="col-md-3">
							<p><strong><?php _e( 'Александр', 'referathelp' ); ?></strong></p>
							<small>
								<?php _e( 'Заказ:', 'referathelp' ); ?>
								<br>
								<?php _e( 'Курсовая', 'referathelp' ); ?>
							</small>
						</div>
						<div class="col-md-9">
							<p class="testimonials_text text-center">
								<?php _e( 'Отличная работа! Спасибо!', 'referathelp' ); ?>
							</p>
						</div>
					</blockquote>
					<blockquote class="col-md-6">
						<div class="col-md-3">
							<p><strong><?php _e( 'Ольга', 'referathelp' ); ?></strong></p>
							<small>
								<?php _e( 'Заказ:', 'referathelp' ); ?>
								<br>
								<?php _e( 'Реферат', 'referathelp' ); ?>
							</small>
						</div>
						<div class="col-md-9">
							<p class="testimonials_text text-center">
								<?php _e( 'В который раз выручили. Спасибо! Обязательно буду еще обращаться. Сессия уже скоро :Р', 'referathelp' ); ?>
							</p>
						</div>
					</blockquote>
					<?php
				}
				wp_reset_postdata();
			?>
			
		</div>	<!-- .row -->
		<?php 
			if ( is_front_page() ) {
		?>
		<div class="row text-center">
			<a href="<?php echo esc_url(home_url('/otzyvy')); ?>" class="btn btn-link">
				<?php _e( 'Посмотреть другие отзывы >>', 'referathelp' ); ?>
			</a>
		</div>	<!-- .row -->
		<?php } ?>
	</div>	<!-- .container -->
</section>	<!-- .testimonials -->