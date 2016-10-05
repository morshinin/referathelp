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
		// 'primary_right'	=>	esc_html__( 'Главное меню справа', 'referathelp' ),
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
		'name'          => esc_html__( 'Боковая колонка посадочной страницы', 'referathelp' ),
		'id'            => 'sidebar-landing',
		'description'   => esc_html__( 'Добавьте сюда все, что хотите видеть в боковой колонке на посадочных страницах работ на заказ.', 'referathelp' ),
		'before_widget' => '<section id="%1" class="widget %2">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Боковая колонка магазина', 'referathelp' ),
		'id'            => 'sidebar-shop',
		'description'   => esc_html__( 'Добавьте сюда все, что хотите видеть в боковой колонке магазина.', 'referathelp' ),
		'before_widget' => '<section id="%1" class="widget %2">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
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
	// Инициализируем свои скрипты
	wp_enqueue_script( 'referathelp-my-scripts', get_template_directory_uri() . '/js/my-scripts.js', array( 'jquery' ) );

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

/**
 * Register custom post types
 */
add_action( 'init', 'referathelp_reg_post_types' );
function referathelp_reg_post_types() {
// Посадочные страницы работ на заказ
	$labels = array(
			'name'					=>	__( 'Посадочные страницы', 'referathelp' ),
			'singular_name'			=>	__( 'Посадочная страница', 'referathelp' ),
			'add_new_item'			=>	__( 'Добавить новую страницу', 'referathelp' ),
			'add_new'				=>	__( 'Добавить новую', 'referathelp' ),
			'new_item'				=>	__( 'Новая страница', 'referathelp' ),
			'edit_item'				=>	__( 'Редактировать страницу', 'referathelp' ),
			'view_item'				=>	__( 'Посмотреть страницу', 'referathelp' ),
			'all_items'				=>	__( 'Все страницы', 'referathelp' ),
			'search_items'			=>	__( 'Искать страницы', 'referathelp' ),
			'not_found'				=>	__( 'Страниц не найдено', 'referathelp' ),
			'not_found_in_trash'	=>	__( 'В корзине страниц не найдено', 'referathelp' )
		);
	$args = array(
			'labels'				=>	$labels,
			'description'			=>	__( 'Посадочные страницы для продвижения услуги написания работ на заказ', 'referathelp' ),
			'public'				=>	true,
			'has_archive'			=>	true,
			'menu_position'			=>	5,
			'menu_icon'				=>	'dashicons-id-alt',
			'supports'				=>	array( 'title', 'editor', 'thumbnail' )
		);
	register_post_type( 'landing', $args );
// Акции
	$labels = array(
			'name'					=>	__( 'Акции', 'referathelp' ),
			'singular_name'			=>	__( 'Акция', 'referathelp' ),
			'add_new_item'			=>	__( 'Добавить новую акцию', 'referathelp' ),
			'add_new'				=>	__( 'Добавить новую', 'referathelp' ),
			'new_item'				=>	__( 'Новая акция', 'referathelp' ),
			'edit_item'				=>	__( 'Редактировать акцию', 'referathelp' ),
			'view_item'				=>	__( 'Посмотреть акцию', 'referathelp' ),
			'all_items'				=>	__( 'Все акции', 'referathelp' ),
			'search_items'			=>	__( 'Искать акции', 'referathelp' ),
			'not_found'				=>	__( 'Акций не найдено', 'referathelp' ),
			'not_found_in_trash'	=>	__( 'В корзине акций не найдено', 'referathelp' )
		);
	$args = array(
			'labels'				=>	$labels,
			'description'			=>	__( 'Записи о новых акциях', 'referathelp' ),
			'public'				=>	true,
			'has_archive'			=>	true,
			'menu_position'			=>	5,
			'menu_icon'				=>	'dashicons-tickets-alt',
			'supports'				=>	array( 'title', 'editor', 'thumbnail' )
		);
	register_post_type( 'specials', $args );
// Вопрос-ответ
	$labels = array(
			'name'					=>	__( 'Вопрос-ответ', 'referathelp' ),
			'singular_name'			=>	__( 'Вопрос-ответ', 'referathelp' ),
			'add_new_item'			=>	__( 'Добавить вопрос', 'referathelp' ),
			'add_new'				=>	__( 'Добавить новый', 'referathelp' ),
			'new_item'				=>	__( 'Новый вопрос', 'referathelp' ),
			'edit_item'				=>	__( 'Редактировать вопрос', 'referathelp' ),
			'view_item'				=>	__( 'Посмотреть вопрос', 'referathelp' ),
			'all_items'				=>	__( 'Все вопросы', 'referathelp' ),
			'search_items'			=>	__( 'Искать вопрос', 'referathelp' ),
			'not_found'				=>	__( 'Вопросов не найдено', 'referathelp' ),
			'not_found_in_trash'	=>	__( 'В корзине вопросов не найдено', 'referathelp' )
		);
	$args = array(
			'labels'				=>	$labels,
			'description'			=>	__( 'Записи с вопросами и ответами на них', 'referathelp' ),
			'public'				=>	true,
			'has_archive'			=>	true,
			'menu_position'			=>	5,
			'menu_icon'				=>	'dashicons-testimonial',
			'supports'				=>	array( 'title', 'editor' )
		);
	register_post_type( 'faq', $args );
// Отзывы
	$labels = array(
			'name'					=>	__( 'Отзывы', 'referathelp' ),
			'singular_name'			=>	__( 'Отзыв', 'referathelp' ),
			'add_new_item'			=>	__( 'Добавить новый отзыв', 'referathelp' ),
			'add_new'				=>	__( 'Добавить отзыв', 'referathelp' ),
			'new_item'				=>	__( 'Новый отзыв', 'referathelp' ),
			'edit_item'				=>	__( 'Редактировать отзыв', 'referathelp' ),
			'view_item'				=>	__( 'Посмотреть отзыв', 'referathelp' ),
			'all_items'				=>	__( 'Все отзывы', 'referathelp' ),
			'search_items'			=>	__( 'Искать отзывы', 'referathelp' ),
			'not_found'				=>	__( 'Отзывов не найдено', 'referathelp' ),
			'not_found_in_trash'	=>	__( 'В корзине отзывов не найдено', 'referathelp' )
		);
	$args = array(
			'labels'				=>	$labels,
			'description'			=>	__( 'Записи отзывов клиентов', 'referathelp' ),
			'public'				=>	true,
			'has_archive'			=>	true,
			'menu_position'			=>	5,
			'menu_icon'				=>	'dashicons-smiley',
			'supports'				=>	array( 'title', 'editor' )
		);
	register_post_type( 'rh_testimonials', $args );
}
/**
 * Добавляем новую таксономию для постов типа вопрос-ответ
 */
add_action( 'init', 'referathelp_tax_type' );
function referathelp_tax_type() {
	$labels = array(
			'name'			=>	__( 'Тема вопроса', 'referathelp' ),
			'singular_name'	=>	__( 'Темы вопросов', 'referathelp' ),
			'search_items'	=>	__( 'Поиск тем', 'referathelp' ),
			'edit_item'		=>	__( 'Редактирование тем', 'referathelp' ),
			'update_item'	=>	__( 'Обновить тему', 'referathelp' ),
			'add_new_item'	=>	__( 'Добавить новую тему', 'referathelp' ),
			'new_item_name'	=>	__( 'Название новой темы', 'referathelp' ),
			'not_found'		=>	__( 'Тем не найдено', 'referathelp' )	
		);
	$args = array(
			'labels'		=>	$labels,
			'hierarchical'	=>	true,
			'query_var'		=>	true,
			'rewrite'		=>	true
		);
	register_taxonomy( 'questionstype', 'faq', $args );
	register_taxonomy_for_object_type( 'questionstype', 'faq' );
	// Тип работ на заказ(курсовая, дипломная и т.п.)
	$labels = array(
			'name'			=>	__( 'Тип работ', 'referathelp' ),
			'singular_name'	=>	__( 'Типы работ', 'referathelp' ),
			'search_items'	=>	__( 'Поиск типов работ', 'referathelp' ),
			'edit_item'		=>	__( 'Редактирование типов работ', 'referathelp' ),
			'update_item'	=>	__( 'Обновить типы работ', 'referathelp' ),
			'add_new_item'	=>	__( 'Добавить тип работ', 'referathelp' ),
			'new_item_name'	=>	__( 'Название типа работ', 'referathelp' ),
			'not_found'		=>	__( 'Типов работ не найдено', 'referathelp' )	
		);
	$args = array(
			'labels'		=>	$labels,
			'hierarchical'	=>	true,
			'query_var'		=>	true,
			'rewrite'		=>	true
		);
	register_taxonomy( 'customworktype', 'landing', $args );
	register_taxonomy_for_object_type( 'customworktype', 'landing' );
}

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

/**
 * Hide admin toolbar on front-end
 */
function my_function_admin_bar() {
	return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');