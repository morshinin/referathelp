<?php 
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
?>