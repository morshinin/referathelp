<?php  
/**
* The template used for workflow section
*
* @package WordPress
* @subpackage referathelp
* @since referathelp 1.0
*/
?>
<?php 
	if ( is_front_page() ) {
?>
<section class="workflow main-margin" id="referathelp_workflow">
<?php } else { ?>
<section class="workflow">
<?php } ?>
	<div class="container">
		<div class="row">
		<?php 
			if ( is_front_page() ) {
		?>
			<h2 class="text-center">
		<?php } else { ?>
			<h2 class="text-center margin-third">
		<?php } ?>
				<?php _e( 'Схема работы', 'referathelp' ); ?>
			</h2>
		</div>
			<?php 
				if ( ! is_front_page() ) {
			?>
		<div class="row">
			<?php
					the_content();
			?>
		</div>
		<?php } ?>
		<div class="row margin-secondary">
			<div class="col-sm-6">
				<div class="col-md-3">
					<p class="workflow_number workflow_number-1">
					</p>
				</div>
				<div class="caption col-md-9">
					<h3>
						<?php _e( 'Оформление заказа', 'referathelp' ); ?>
					</h3>
					<p>
						<?php _e( 'Оформить заказ можно двумя способами:', 'referathelp' ); ?>
						<ul>
							<li>
								<?php _e( 'Позвонив по телефону ', 'referathelp' ); ?>
							<?php if(function_exists('show_text_block')) { echo show_text_block('telefon', true); } ?>
							</li>
							<li>
								<?php _e( 'Заполнив ', 'referathelp' ); ?>
								<a href="#">
									<?php _e( 'форму заказа', 'referathelp' ); ?>
								</a>
							</li>
						</ul>
					<p>
						<?php _e( 'Автор свяжется с вами в течении 1 часа', 'referathelp' ); ?>
					</p>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="col-md-3">
					<p class="workflow_number workflow_number-2">
					</p>
				</div>
				<div class="caption col-md-9">
					<h3>
						<?php _e( 'Предоплата', 'referathelp' ); ?>
					</h3>
					<p>
						<?php _e( 'Для начала работы над вашим заданием, вам необходимо внести предоплату.', 'referathelp' ); ?>
					</p>
				</div>
			</div>
		</div>	<!-- .row -->
		<div class="row">
			<div class="col-sm-6">
				<div class="col-md-3">
					<p class="workflow_number workflow_number-3">
					</p>
				</div>
				<div class="caption col-md-9">
					<h3>
						<?php _e( 'Выполнение задания', 'referathelp' ); ?>
					</h3>
					<p>
						<?php _e( 'После внесения предоплаты, мы приступаем к работе над вашим заданием. Вы можете отслеживать его выполнение, связавшись с автором по почте.', 'referathelp' ); ?>
					</p>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="col-md-3">
					<p class="workflow_number">
					</p>
				</div>
				<div class="caption col-md-9">
					<h3>
						<?php _e( 'Завершение работы', 'referathelp' ); ?>
					</h3>
					<p>
						<?php _e( 'По выполнении вашего заказа, автор уведомит вас об этом. После чего работа будет отправлена на ваш электронный адрес.', 'referathelp' ); ?>
					</p>
				</div>
			</div>
		</div>	<!-- .row -->
	</div>	<!-- .container -->
</section>	<!-- .workflow -->