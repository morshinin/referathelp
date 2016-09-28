<?php  
/**
* The template used for payment methods section
*
* @package WordPress
* @subpackage referathelp
* @since referathelp 1.0
*/
?>
<section class="payment-methods main-margin" id="referathelp_payment-methods">
	<div class="container">
		<div class="row">
			<h2 class="text-center">
				<?php _e( 'Способы оплаты', 'referathelp' ); ?>
			</h2>
		</div>
		<div class="row">
			<div class="col-md-3 text-center">
				<i class="fa fa-credit-card fa-3x"></i>
				<h3>
					<?php _e( 'Банковские карты', 'referathelp' ); ?>
				</h3>
			</div>
			<div class="col-md-3 text-center">
				<i class="fa fa-mobile fa-3x"></i>
				<h3>
					<?php _e( 'Оплата со счета мобильного', 'referathelp' ); ?>
				</h3>
			</div>
			<div class="col-md-3 text-center">
				<i class="fa fa-btc fa-3x"></i>
				<h3>
					<?php _e( 'Электронные деньги', 'referathelp' ); ?>
				</h3>
			</div>
			<div class="col-md-3 text-center">
				<i class="fa fa-money fa-3x"></i>
				<h3>
					<?php _e( 'Наличные', 'referathelp' ); ?>
				</h3>
			</div>
		</div>	<!-- .row -->
	</div>	<!-- .container -->
</section>	<!-- .payment-methods -->