<?php
/**
 * referathelp functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package referathelp
 */

if ( ! function_exists( 'referathelp_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function referathelp_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on referathelp, use a find and replace
	 * to change 'referathelp' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'referathelp', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' 		=> esc_html__( 'Primary', 'referathelp' ),
		'secondary'		=>	esc_html__( 'Дополнительное меню', 'referathelp' ),
		'third'			=>	esc_html__( 'Меню правовой информации', 'referathelp' )
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'referathelp_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;

add_action( 'after_setup_theme', 'referathelp_setup' );
// Register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function referathelp_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'referathelp_content_width', 640 );
}
add_action( 'after_setup_theme', 'referathelp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function referathelp_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'referathelp' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'referathelp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name' 			=>	esc_html__('УТП на главной', 'referathelp'),
		'id' 			=>	'sidebar-herounit',
		'description'	=>	'Вы можете задать заголовок и подзаголовок',
		'before_widget'	=>	'',
		'after_widget'	=>	'',
		'before_title'	=>	'<h1 class="text-center">',
		'after_title'	=>	'</h1>',
	) );
}
add_action( 'widgets_init', 'referathelp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function referathelp_scripts() {
	/**
	 * Bootstrap styles
	 */
	wp_enqueue_style( 'referathelp-bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'referathelp-bootstrap-theme-style', get_template_directory_uri() . '/css/bootstrap-theme.min.css' );
	/**
	 * Fontawesome
	 */
	wp_enqueue_style( 'referathelp-fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	/**
	 * Slick slider style
	 */
	wp_enqueue_style( 'referathelp-slick-style', get_template_directory_uri() . '/slick/slick.css' );
	wp_enqueue_style( 'referathelp-slick-theme-style', get_template_directory_uri() . '/slick/slick-theme.css' );
	/**
	 * Main style
	 */
	wp_enqueue_style( 'referathelp-style', get_stylesheet_uri() );

	/**
	 * Navigation scripts
	 */
	wp_enqueue_script( 'referathelp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'referathelp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	/**
	 * Bootstrap js
	 */
	wp_enqueue_script( 'referathelp-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery') );

	/**
	 * Slick slider js
	 */
	wp_enqueue_script( 'referathelp-slick-js', get_template_directory_uri() . '/slick/slick.js', array('jquery') );	
	wp_enqueue_script( 'referathelp-slick-control', get_template_directory_uri() . '/slick/slick-control.js', array('referathelp-slick-js') );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'referathelp_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

add_theme_support( 'woocommerce' );

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 15 );

add_action( 'woocommerce_before_single_product_summary', 'comments_template', 30 );
add_action( 'wpt_footer', 'wpt_footer_cart_link' );

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

// Делаем кастомные поля для платежной информации
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
add_filter( 'woocommerce_enqueue_styles', '__return_false' );

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

/**
 * Hide admin toolbar on front-end
 */
function my_function_admin_bar() {
	return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');