<?php 
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
			'has_archive'			=>	false,
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
?>