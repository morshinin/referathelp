<?php 
/**
 * The template used for displaying benefits section
 *
 * @package WordPress
 * @subpackage referathelp
 * @since referathelp 1.0
 */
?>
<?php 
// Для главной страницы своя разметка
if ( is_front_page() ) { ?>
<section class="benefits main-margin" id="referathelp_benefits">
	<div class="container">
		<div class="row">
			<h2 class="text-center">
				<?php _e( 'Наши преимущества', 'referathelp' ); ?>
			</h2>
		</div>
		<div class="row">
			<div class="col-sm-6 col-md-4 benefits_item">
				<h3 class="text-center margin-third">
					<?php _e( 'Работа под ключ', 'referathelp' ); ?>
				</h3>
				<i class="fa fa-key fa-3x text-center margin-third"></i>
				<div class="caption">
					<p class="text-center">
						<?php _e( 'Мы делаем работу "под ключ" и доводим ее до сдачи. Даже если попался взыскательный преподаватель, вы можете быть уверены в том, что все правки будут выполнены в срок и в надлежащем виде.', 'referathelp' ); ?>
					</p>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 benefits_item">
				<h3 class="text-center margin-third">
					<?php _e( 'Без посредников', 'referathelp' ); ?>
				</h3>
				<i class="fa fa-certificate fa-3x text-center margin-third"></i>
				<div class="caption">
					<p class="text-center">
						<?php _e( 'Вы общаетесь напрямую с автором работы. Вы можете написать ему в любое время и он ответит вам сразу же, как будет в сети.', 'referathelp' ); ?>
					</p>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 benefits_item">
				<h3 class="text-center margin-third">
					<?php _e( 'Конфиденциально', 'referathelp' ); ?>
				</h3>
				<i class="fa fa-shield fa-3x text-center margin-third"></i>
				<div class="caption">
					<p class="text-center">
						<?php _e( 'У нас очень строгая политика конфиденциальности, поэтому мы гарантируем не разглашать никакой информации о вас никому.', 'referathelp' ); ?>
					</p>
				</div>
			</div>
		</div>	<!-- .row -->
	</div>	<!-- .container -->
</section>	<!-- .benefits -->
<?php } else { ?>
<!-- <section class="benefits main-margin" id="referathelp_benefits">
	<div class="container"> -->
		<div class="row">
			<h2 class="text-center">
				<?php _e( 'Наши преимущества', 'referathelp' ); ?>
			</h2>
		</div>
		<div class="row">
			<div class="col-md-4 benefits_img-page text-center">
				<i class="fa fa-key fa-3x"></i>
			</div>
			<div class="caption col-md-8">
				<h3 class="margin-third">
					<?php _e( 'Работа под ключ', 'referathelp' ); ?>
				</h3>
					<p class="">
						<?php _e( 'Мы делаем работу "под ключ" и доводим ее до сдачи. Даже если попался взыскательный преподаватель, вы можете быть уверены в том, что все правки будут выполнены в срок и в надлежащем виде.', 'referathelp' ); ?>
					</p>
			</div>
		</div>	<!-- .row -->
		<div class="row">
			<div class="col-md-4 benefits_img-page text-center">
				<i class="fa fa-certificate fa-3x"></i>
			</div>
			<div class="caption col-md-8">
				<h3 class="margin-third">
					<?php _e( 'Без посредников', 'referathelp' ); ?>
				</h3>
					<p class="">
						<?php _e( 'Вы общаетесь напрямую с автором работы. Вы можете написать ему в любое время и он ответит вам сразу же, как будет в сети.', 'referathelp' ); ?>
					</p>
			</div>
		</div>	<!-- .row -->
		<div class="row">
			<div class="col-md-4 benefits_img-page text-center">
				<i class="fa fa-shield fa-3x"></i>
			</div>
			<div class="caption col-md-8">
				<h3 class="margin-third">
					<?php _e( 'Конфиденциально', 'referathelp' ); ?>
				</h3>
					<p class="">
						<?php _e( 'У нас очень строгая политика конфиденциальности, поэтому мы гарантируем не разглашать никакой информации о вас никому.', 'referathelp' ); ?>
					</p>
			</div>
		</div>	<!-- .row -->
<!--	</div>	 .container 
</section>	 .benefits -->
<?php } ?>