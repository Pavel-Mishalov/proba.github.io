<?php

/**
 *   The register post-type feedback
 */

add_action('init', 'miracle_feetback_post_init');
function miracle_feetback_post_init(){
	register_post_type('feedback', array(
		'labels'             => array(
			'name'               => 'Отзывы',
			'singular_name'      => 'Отзыв',
			'add_new'            => 'Добавить отзыв',
			'add_new_item'       => 'Добавить новой отзыв',
			'edit_item'          => 'Редактировать данные отзыва',
			'new_item'           => 'Новый отзыв',
			'view_item'          => 'Посмотреть отзыв',
			'search_items'       => 'Найти отзыв',
			'not_found'          => 'В организации не найден отзыв',
			'not_found_in_trash' => 'В корзине не найден отзыв',
			'parent_item_colon'  => '',
			'menu_name'          => 'Отзывы',
                        'featured_image'     => 'Изображение отзыва',
                        'set_featured_image' => 'Установить изображение',
                        'remove_featured_image' => 'Удалить изображение',
                        'use_featured_image' => 'Использовать как изображение отзыва',

		  ),
        'description'        => 'Здесь хранятся все отзывы',
		'public'             => false,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 9,
        'menu_icon'          => 'dashicons-format-status',
		'supports'           => array
					(
					'title',
					)
	) );
}