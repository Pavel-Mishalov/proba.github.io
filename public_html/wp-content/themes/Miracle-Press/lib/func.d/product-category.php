<?php

// Register product category

function miracle_register_product_taxonomy() {

	$labels = array(
		'name'                       =>  'Категории продукции',
		'singular_name'              =>  'Категория продукта',
		'menu_name'                  =>  'Новая категория',
		'all_items'                  =>  'Все категории',
		'parent_item'                =>  'Родительская категория',
		'parent_item_colon'          =>  'Родительская категория',
		'new_item_name'              =>  'Новая категория',
		'add_new_item'               =>  'Добавить',
		'edit_item'                  =>  'Редактировать',
		'update_item'                =>  'Обновить',
		'view_item'                  =>  'Вид',
		'separate_items_with_commas' =>  'Отделить элементы запятыми',
		'add_or_remove_items'        =>  'Добавить или удалить категории',
		'choose_from_most_used'      =>  'Часто используемые',
		'popular_items'              =>  'Популярные',
		'search_items'               =>  'Поиск',
		'not_found'                  =>  'Не найдено',
	);
	$rewrite = array(
		'slug'                       => 'product_cat',
		'with_front'                 => false,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'product_cat', array( 'product' ), $args );

}

add_action( 'init', 'miracle_register_product_taxonomy', 0 );