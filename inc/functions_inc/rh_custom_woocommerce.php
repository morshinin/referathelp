<?php 
/**
 * Woocommerce
 */

add_theme_support( 'woocommerce' );

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
// Убираем цену из ее стандартной позиции в каталоге товаров
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
// Вставляем цену на другую позицию в каталоге товаров
add_action( 'rh_after_shop_loop_price', 'woocommerce_template_loop_price', 10 );
// Убираем кнопку Добавить в корзину из ее стандартной позиции в каталоге товаров
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
// Вставляем кнопку Добавить в корзину на другую позицию в каталоге товаров
add_action( 'rh_after_shop_loop_add_to_cart', 'woocommerce_template_loop_add_to_cart', 10 );
// remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
// Убираем секцию похожие товары со страницы товара
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
// remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 15 );
// Убираем цену из под заголовка на странице работы чтобы потом добавить в боковой колонке
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
// Убираем кнопку добавить в корзину из под заголовка на странице работы чтобы потом добавить в боковой колонке
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );

// добавляем комментарии в другом месте
// add_action( 'woocommerce_before_single_product_summary', 'comments_template', 30 );
add_action( 'wpt_footer', 'wpt_footer_cart_link' );

// Добавляем цену на странице работы
// add_action( 'woocommerce_after_single_product', 'woocommerce_template_single_price', 10 );
add_action( 'woocommerce_show_fucking_price', 'woocommerce_template_single_price', 10 );
// Добавляем кнопку добавить в корзину на странице работы
add_action( 'woocommerce_show_fucking_price', 'woocommerce_template_single_add_to_cart', 30 );

// Меняем разметку для заголовка работы в каталоге
add_filter( 'woocommerce_before_shop_loop_item', 'referathelp_template_loop_product_link_open' );
if (  ! function_exists( 'referathelp_template_loop_product_link_open' ) ) {

	/**
	 * Insert the opening anchor tag for products in the loop.
	 */
	function referathelp_template_loop_product_link_open() {
		echo '<div class="row">';
		echo '<div class="col-md-12 rh-catalog_title-wrapper">';
		echo '<a href="' . get_the_permalink() . '" class="woocommerce-LoopProduct-link">';
	}
}
add_filter( 'woocommerce_after_shop_loop_item', 'referathelp_template_loop_product_link_close' );
if (  ! function_exists( 'referathelp_template_loop_product_link_close' ) ) {

	/**
	 * Insert the close anchor tag for products in the loop.
	 */
	function referathelp_template_loop_product_link_close() {
		echo '</a>';
		echo '</div>';
		echo '</div>';
	}
}

// Change number or products per row to 1
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 1; // 3 products per row
	}
}

// Меняем разметку для ссылки и цены товара в каталоге
// add_filter( 'woocommerce_template_loop_product_link_open', 'rh_change_product_link' )
// function rh_change_product_link() {
// 	echo '<div class="row">';
// 	echo '<a href="' . get_the_permalink() . '" class="woocommerce-LoopProduct-link col-md-8">';
// }

// Убираем счетчик количества товаров со страницы товара
add_filter( 'woocommerce_is_sold_individually', 'wc_remove_all_quantity_fields', 10, 2 );
function wc_remove_all_quantity_fields( $return, $product ) {
    return( true );
}
// Убираем дефолтные вкладки со страницы товара
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['description'] );      	// Remove the description tab
    unset( $tabs['reviews'] ); 			// Remove the reviews tab
    unset( $tabs['additional_information'] );  	// Remove the additional information tab

    return $tabs;

}

// Добавим новую вкладку на страницу товара
add_filter( 'woocommerce_product_tabs', 'woo_new_product_tab' );
function woo_new_product_tab( $tabs ) {
	
	// Adds the new tab
	
	$tabs['test_tab'] = array(
		'title' 	=> __( 'Введение', 'woocommerce' ),
		'priority' 	=> 40,
		'callback' 	=> 'woo_new_product_tab_content'
	);
	$tabs['soderj_tab'] = array(
		'title' 	=> __( 'Содержание', 'woocommerce' ),
		'priority' 	=> 50,
		'callback' 	=> 'woo_soderj_product_tab_content'
	);
	$tabs['lib_tab'] = array(
		'title' 	=> __( 'Список литературы', 'woocommerce' ),
		'priority' 	=> 60,
		'callback' 	=> 'woo_lib_product_tab_content'
	);

	return $tabs;

}
function woo_new_product_tab_content() {

	// Вкладка введение

	// echo '<h2>New Product Tab</h2>';
	echo '<p>' . the_field( 'rh_work_intro' ) . '</p>';
	
}
function woo_soderj_product_tab_content() {

	// Вкладка содержание

	echo the_field( 'rh_work_soderj' );
	
}
function woo_lib_product_tab_content() {

	// Вкладка список литературы

	echo the_field( 'rh_work_lib' );
	
}

function wpt_footer_cart_link() {

	global $woocommerce;

	if ( sizeof( ($woocommerce->cart->cart_contents) > 0) && ( !is_cart() && !is_checkout() ) ) :
		// echo '<a class="btn alt" href="' . $woocommerce->cart->get_cart_url() . '" title="' . __( 'Корзина' ) . '">' . __( 'Корзина' ) . '</a>';
$get_cart_url = wc_get_cart_url();
	echo '<a class="cart-contents" href="' . $get_cart_url . '" title="' . _e( 'View your shopping cart' ) . '">' . sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ) . ' - ' . WC()->cart->get_cart_total() . '</a>';

	echo '<a class="btn" href="' . $woocommerce->cart->get_checkout_url() . '" title="' . __( 'Оформление заказа' ) . '">' . __( 'Оформление заказа' ) . '</a>';
	endif;
}

// Ensure cart contents update when products are added to the cart via AJAX (place the following in functions.php)
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );
function woocommerce_header_add_to_cart_fragment( $fragments ) {
	ob_start();
	?>
	<a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf (_n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a> 
	<?php
	
	$fragments['a.cart-contents'] = ob_get_clean();
	
	return $fragments;
}

// Делаем кастомные поля для платежной информации, т.е. убираем ненужные
function wpt_custom_billing_fields( $fields = array() ) {

	unset($fields['billing_company']);
	unset($fields['billing_last_name']);
	unset($fields['billing_address_1']);
	unset($fields['billing_address_2']);
	unset($fields['billing_country']);
	unset($fields['billing_city']);
	unset($fields['billing_state']);
	unset($fields['billing_postcode']);

	echo "<pre>";
		// var_export($fields);
	echo "</pre>";


	return $fields;

}

add_filter( 'woocommerce_billing_fields', 'wpt_custom_billing_fields' );

// Вырубаем стили вукомерс
// add_filter( 'woocommerce_enqueue_styles', '__return_false' );

// Делаем кастомные поля для дополнительной информации
// function wpt_custom_order_comments( $fields = array() ) {

// 	unset($fields['order']['order_comments']);
// 	echo "<pre>";
// 		// var_export($fields);
// 	echo "</pre>";
// 	return $fields;

// }
// add_filter( 'woocommerce_checkout_fields', 'wpt_custom_order_comments' );

/* Делаем, чтобы на странице товара отображалось только два похожих товара */
if ( ! function_exists( 'woocommerce_output_related_products' ) ) {

	/**
	 * Output the related products.
	 *
	 * @subpackage	Product
	 */
	function woocommerce_output_related_products() {

		$args = array(
			'posts_per_page' 	=> 2,
			'columns' 			=> 2,
			'orderby' 			=> 'rand'
		);

		woocommerce_related_products( apply_filters( 'woocommerce_output_related_products_args', $args ) );
	}
}

?>