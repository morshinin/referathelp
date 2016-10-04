<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.1
 */
 
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
 
global $product, $woocommerce_loop;
 
// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
    return;
}
 
 
 
?>
 
 
<div <?php post_class('col-md-12'); ?>>
 
 <?php 
global $post, $product;
	echo $product->get_tags(); ?>
	<small>
		<?php _e( 'по теме:', 'referathelp' ); ?>
	</small>
    <?php
   
 
    /**
     * woocommerce_before_shop_loop_item hook.
     *
     * @hooked woocommerce_template_loop_product_link_open - 10
     */
    do_action( 'woocommerce_before_shop_loop_item' );
   
    /**
     * woocommerce_before_shop_loop_item_title hook.
     *
     * @hooked woocommerce_show_product_loop_sale_flash - 10
     * @hooked woocommerce_template_loop_product_thumbnail - 10
     */
    do_action( 'woocommerce_before_shop_loop_item_title' );
 
    /**
     * woocommerce_shop_loop_item_title hook.
     *
     * @hooked woocommerce_template_loop_product_title - 10
     */
    do_action( 'woocommerce_shop_loop_item_title' );
 
    /**
     * woocommerce_after_shop_loop_item_title hook.
     *
     * @hooked woocommerce_template_loop_rating - 5
     * @hooked woocommerce_template_loop_price - 10
     */
    do_action( 'woocommerce_after_shop_loop_item_title' );
 
    /**
     * woocommerce_after_shop_loop_item hook.
     *
     * @hooked woocommerce_template_loop_product_link_close - 5
     * @hooked woocommerce_template_loop_add_to_cart - 10
     */
    do_action( 'woocommerce_after_shop_loop_item' );
 
    ?>
 	<div class="row">
		<div class="col-md-4">
			<?php echo $product->get_categories( '', 'Предмет: ' ); ?>
		</div>
		<div class="col-md-4">
			<?php _e( 'Дата добавления: ', 'referathelp' ); echo get_the_date(); ?>
		</div>
		<div class="col-md-4">
            <?php _e( 'Страниц: ', 'referathelp' ); the_field( 'rh_work_page_count' ); ?>      
        </div>
	</div>
 
</div>
 
<?php if($woocommerce_loop['loop'] % 4 === 0) {  echo '</div><div class="row">';} ?>
  

