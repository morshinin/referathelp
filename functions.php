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

// Register widgets
require_once( __DIR__ . '/inc/functions_inc/rh_widgets.php' );

/**
 * Enqueue scripts and styles.
 */
require_once get_template_directory() . '/inc/functions_inc/rh_enqueue_scripts.php';

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
require_once get_template_directory() . '/inc/functions_inc/rh_rcpt.php';

/**
 * Добавляем новые таксономии
 */
require_once get_template_directory() . '/inc/functions_inc/rh_custom_taxonomy.php';

/**
 * Woocommerce
 */
require_once get_template_directory() . '/inc/functions_inc/rh_custom_woocommerce.php';

/**
 * Hide admin toolbar on front-end
 */
function my_function_admin_bar() {
	return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

/**
 * Добавляем лого кастомайзер
 */
// Adding theme customizer support
function referathelp_theme_customizer($wp_customize) {
$wp_customize->add_section('referathelp_logo_section', array(
  'title' => __('Logo', 'referathelp'),
  'priority' => 30,
  'description' => 'Загрузите лого'
));
$wp_customize->add_setting('referathelp_logo');
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'referathelp', array(
  'label' => __('Logo', 'referathelp'),
  'section' => 'referathelp_logo_section',
  'settings' => 'referathelp_logo',
)));
}
add_action('customize_register', 'referathelp_theme_customizer');

/**
 * Шорткоды
 */
require_once get_template_directory() . '/inc/functions_inc/rh_shortcodes.php';

/**
 * Форма комментариев
 */
add_filter( 'comment_form_defaults', 'cd_pre_comment_text' );
/**
 * Change the text output that appears before the comment form
 * Note: Logged in user will not see this text.
 * 
 * @author Carrie Dils <http://www.carriedils.com>
 * @uses comment_notes_before <http://codex.wordpress.org/Function_Reference/comment_form>
 * 
 */
function cd_pre_comment_text( $arg ) {
  $arg['comment_notes_before'] = '<p class="comment-notes"><small id="email-notes">' . __( 'Your email address will not be published.' ) . __( ' Поля помеченные * обязательны для заполнения.' ) . '</small></p>';
  return $arg;
}