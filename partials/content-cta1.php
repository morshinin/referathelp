<?php  
/**
* The template used for call to action 1 section
*
* @package WordPress
* @subpackage referathelp
* @since referathelp 1.0
*/
?>
<div class="cta cta1 main-margin">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<p class="lead text-inverse">
					<?php _e( 'Узнайте сколько будет стоить написание вашей работы', 'referathelp' ); ?>
				</p>
			</div>
			<div class="col-md-5">
				<?php echo do_shortcode( '[contact-form-7 id="210" title="Форма захвата 1"]' ); ?>
			</div>
		</div>	<!-- .row -->
	</div>	<!-- .container -->
</div>	<!-- .cta1 -->