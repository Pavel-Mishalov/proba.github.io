<?php

/**
 *   The register post-type project
 */

add_action('init', 'miracle_project_post_init');
function miracle_project_post_init(){
	register_post_type('project', array(
		'labels'             => array(
			'name'               => 'Проекты',
			'singular_name'      => 'Проект',
			'add_new'            => 'Добавить проект',
			'add_new_item'       => 'Добавить новой проект',
			'edit_item'          => 'Редактировать данные проекта',
			'new_item'           => 'Новый проект',
			'view_item'          => 'Посмотреть проект',
			'search_items'       => 'Найти проект',
			'not_found'          => 'В организации не найден проект',
			'not_found_in_trash' => 'В корзине не найден проект',
			'parent_item_colon'  => '',
			'menu_name'          => 'Проекты',
                        'featured_image'     => 'Изображение проекта',
                        'set_featured_image' => 'Установить изображение',
                        'remove_featured_image' => 'Удалить изображение',
                        'use_featured_image' => 'Использовать как изображение проекта',

		  ),
        'description'        => 'Здесь хранятся все проекты',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 8,
        'menu_icon'          => 'dashicons-media-interactive',
		'supports'           => array
					(
 					'title',
					'thumbnail'
					)
	) );
}

add_theme_support( 'post-thumbnails', array( 'project' ) );
