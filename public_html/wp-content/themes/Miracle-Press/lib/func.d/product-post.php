<?php

/**
 *   The register post-type product
 */

add_action('init', 'miracle_product_post_init');
function miracle_product_post_init(){
	register_post_type('product', array(
		'labels'             => array(
			'name'               => 'Продукты',
			'singular_name'      => 'Продукт',
			'add_new'            => 'Добавить продукт',
			'add_new_item'       => 'Добавить новой продукт',
			'edit_item'          => 'Редактировать данные продукта',
			'new_item'           => 'Новый продукт',
			'view_item'          => 'Посмотреть продукт',
			'search_items'       => 'Найти продукт',
			'not_found'          => 'В организации не найден продукт',
			'not_found_in_trash' => 'В корзине не найден продукт',
			'parent_item_colon'  => '',
			'menu_name'          => 'Продукты',
                        'featured_image'     => 'Изображение продукта',
                        'set_featured_image' => 'Установить изображение',
                        'remove_featured_image' => 'Удалить изображение',
                        'use_featured_image' => 'Использовать как изображение продукта',

		  ),
        'description'        => 'Здесь хранятся все продукты',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 9,
        'menu_icon'          => 'dashicons-cart',
		'supports'           => array
					(
					'title',
					)
	) );
}