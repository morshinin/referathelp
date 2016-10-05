<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php
	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>

<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
<!-- <section class="two-column row no-max pad"> -->
<!--   <div class="small-12 columns">
    <div class="row"> -->

          <div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">
        <div class="primary">
	<?php
		/**
		 * woocommerce_before_single_product_summary hook.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
	?>
		</div>
	  </div>

	    <div class="col-md-8">
	  	<!-- <div class="secondary"> -->

		<?php
			/**
			 * woocommerce_single_product_summary hook.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 */
			do_action( 'woocommerce_single_product_summary' );
		?>


	<?php
		/**
		 * woocommerce_after_single_product_summary hook.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action( 'woocommerce_after_single_product_summary' );
	?>

	<meta itemprop="url" content="<?php the_permalink(); ?>" />
		
				</div>	

  <div class="col-md-4 rh-single-product_sidebar">
  <table class="table">
  	<tbody>
  		<?php 
  			// $value = array( 'landing_cost', 'landing_time', 'landing_author' );
  			$fields = get_fields();
  			// var_dump($fields);
  			// $t_heading = array( 'Цена', 'Срок выполнения', 'Автор', 'Доработка', 'Гарантия' );
  			/**
  			 * Собираем все кастомные метаполя и выводим их в таблице. Здесь используются теги плагина Advanced Custom Fields.
  			 */
  			if ( $fields ) {
  				foreach ($fields as $field_name => $value) {
  					$f_obj = get_field_object( $field_name, false, array( 'load_value' => false ) );
  					if ( $field_name !== 'rh_work_intro' && $field_name !== 'rh_work_soderj' && $field_name !== 'rh_work_lib' ) {
  					?>
  					<tr>
  						<th>
  							<?php 
  							
  							echo $f_obj['label'];
  							 ?>
  						</th>
  						<td>
  							<?php echo $value; ?>
  						</td>
  					</tr>
  					<?php
  				}/* endif */
  				}
  			}
  		 ?>
  	</tbody>
  </table>
<?php do_action( 'woocommerce_show_fucking_price' ); ?>
</div>
</div>
<?php do_action( 'woocommerce_after_single_product' ); ?>
