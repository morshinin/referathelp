<?php 
/**
* The template used for services
*
* @package WordPress
* @subpackage referathelp
* @since referathelp 1.0
*/
?>
<?php // Для главной страницы своя разметка
if ( is_front_page() ) { ?>
<section class="services main-margin" id="referathelp_services">
	<div class="container">
		<div class="row">
			<h2 class="text-center">
				<?php _e( 'Наши услуги', 'referathelp' ); ?>
			</h2>
		</div>
		<div class="row">
			<div class="services_carousel">
				<?php 
					global $post;
					$args = array( 'posts_per_page' => 8, 'post_type' => 'landing', 'order' => 'ASC' );
					$landing_posts = get_posts( $args );
					if ( $posts ) {
						foreach ( $landing_posts as $post ) : setup_postdata( $post );
						$title = get_the_title();
						// $value = array( 'landing_cost', 'landing_time', 'landing_author' );
						$link = get_the_permalink();
						$work_date = 'landing_time';
						$work_cost = 'landing_cost';
						$field_1 = get_field_object( $work_date );
						$field_2 = get_field_object( $work_cost );
						
						?>
						<div class="text-center">
							<h3>
								<?php echo $title; ?>
							</h3>
							<div>
								<?php the_post_thumbnail( array( 32, 32 ), array( 'class' => 'services_img' ) ); ?>
							</div>
							<div class="caption">
								<p>
									<?php echo $field_1['value']; ?>
								</p>
								<p>
									<?php echo $field_2['value']; ?>
								</p>
								<p><a href="<?php echo $link; ?>" class="btn btn-link"><?php _e( 'Подробнее >>', 'referathelp' ); ?></a></p>
							</div>
						</div>
						<?php
						endforeach;
					}
					wp_reset_postdata();
				 ?>
				
			</div>	<!-- .services_carousel -->
		</div>	<!-- .row -->
	</div>	<!-- .container -->
</section>	<!-- .services -->
<?php } else { ?>
		<div class="row margin-third">
			<h2 class="text-center">
				<?php _e( 'Наши услуги', 'referathelp' ); ?>
			</h2>
		</div>
<div class="row">
<table class="table table-responsive">
	<tbody>
		<tr>
			<th></th>
			<th></th>
			<th>
				<?php _e( 'Сроки', 'referathelp' ); ?>
			</th>
			<th>
				<?php _e( 'Цена', 'referathelp' ); ?>
			</th>
			<th></th>
		</tr>
				<?php 
					global $post;
					$args = array( 'posts_per_page' => 8, 'post_type' => 'landing', 'order' => 'ASC' );
					$landing_posts = get_posts( $args );
					if ( $posts ) {
						foreach ( $landing_posts as $post ) : setup_postdata( $post );
						$title = get_the_title();
						// $value = array( 'landing_cost', 'landing_time', 'landing_author' );
						$link = get_the_permalink();
						$work_date = 'landing_time';
						$work_cost = 'landing_cost';
						$field_1 = get_field_object( $work_date );
						$field_2 = get_field_object( $work_cost );
						
						?>
						<tr>
							<td>
								<?php the_post_thumbnail( array( 32, 32 ) ); ?>
							</td>
							<td>
									<?php echo $title; ?>
							</td>
							<td>
									<?php echo $field_1['value']; ?>
							</td>
							<td>
									<?php echo $field_2['value']; ?>
							</td>
							<td>
								<a href="<?php echo $link; ?>" class="btn btn-link"><?php _e( 'Заказать >>', 'referathelp' ); ?></a>
							</td>
						</tr>
						<?php
						endforeach;
					}
					wp_reset_postdata();
				 ?>
		</tbody>
</table>
</div>

<?php } ?>