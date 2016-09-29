<?php  
/**
* The template used for call to action form 2
*
* @package WordPress
* @subpackage referathelp
* @since referathelp 1.0
*/
?>
<div class="cta cta2 main-margin">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<p class="lead text-inverse">
					<?php _e( 'При заказе двух и более работ ', 'referathelp' ); ?>
					<strong class="text-uppercase">
						<?php _e( 'скидка 10%', 'referathelp' ); ?>
					</strong>
					<?php _e( 'на весь заказ', 'referathelp' ); ?>
				</p>
			</div>
			<div class="col-md-5">
				<?php echo do_shortcode( '[contact-form-7 id="211" title="Без названия"]' ); ?>
			</div>
		</div>	<!-- .row -->
	</div>	<!-- .container -->
</div>	<!-- .cta2 -->