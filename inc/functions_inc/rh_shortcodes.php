<?php 
/**
 * Шорткод для сообщения предупреждения
 */
function rh_warning_message( $atts, $content = null ) {
	return '<div class="panel panel-warning">
				<div class="panel-heading">
					<h4 class="panel-title">
						Внимание!
					</h4>
				</div>
				<div class="panel-body">'
					. $content . 
				'</div>
			</div>';
}
add_shortcode( 'warning', 'rh_warning_message' );
?>