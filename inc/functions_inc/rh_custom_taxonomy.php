<?php 
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
?>