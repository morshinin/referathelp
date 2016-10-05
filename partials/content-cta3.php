<?php  
/**
* The template used for call to action 3 section
*
* @package WordPress
* @subpackage referathelp
* @since referathelp 1.0
*/
?>
<!-- Дополнительная форма захвата на статичных страницах -->
<div class="well well-lg">
	<div class="container text-center">
		<h3>
			<?php _e( 'Не нашли ответа на свой вопрос?', 'referathelp' ); ?>
			<br>
		<small>
			<?php _e( 'Оставьте свой email, и мы свяжемся с вами в течении 15 минут', 'referathelp' ); ?>
		</small>
		</h3>
		<?php echo do_shortcode( '[contact-form-7 id="312" title="Форма захвата на статичных страницах"]' ); ?>
		<p>
			<?php _e( 'или позвоните по телефону +7 (905) 763 43 52', 'referathelp' ); ?>
		</p>
	</div>
</div>