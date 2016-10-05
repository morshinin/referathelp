<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package referathelp
 */

if ( ! is_active_sidebar( 'sidebar-shop' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area col-md-4" role="complementary">
	<?php dynamic_sidebar( 'sidebar-shop' ); ?>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4 class="panel-title">
				<?php _e( 'Не нашли подходящую работу?', 'referathelp' ); ?>
			</h4>
		</div>
		<div class="panel-body">
			<p class="lead">
				<?php _e( 'Закажите написание с нуля!', 'referathelp' ); ?>
			</p>
		</div>
		<div>
			<p>
				<a href="<?php echo esc_url( home_url() ); ?>" class="btn btn-link">
					<?php _e( 'Подробнее >>', 'referathelp' ); ?>
				</a>
			</p>
			<p>
				<a href="#" class="btn btn-link eModal-1">
					<?php _e( 'Заказать >>', 'referathelp' ); ?>
				</a>
			</p>
		</div>
	</div>
</aside><!-- #secondary -->
