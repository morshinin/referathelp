<?php 
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
?>