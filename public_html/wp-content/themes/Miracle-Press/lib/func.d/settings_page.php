<?php

///////////////////
// Settings Page //
///////////////////

add_action( 'admin_menu', 'register_my_custom_menu_page' );
function register_my_custom_menu_page(){
	add_menu_page( 
		'Настройки организации',
		'Настройки организации',
		'manage_options',
		'miracle-company-settings',
		'my_custom_menu_page',
		'dashicons-admin-generic',
		3.105 
	); 
}

function my_custom_menu_page(){
	?>
	<h2>Общая информация организации</h2>
	<p>В данном разделе настраиваются общие данные организации, такие как:<p>
	<ul>
		<li><a href="?page=miracle-option-logo">Логотип</a>,</li>
		<li><a href="?page=miracle-option-phone-number">Номер телефона</a>,</li>
		<li><a href="?page=miracle-option-email-address">Электронная почта</a>,</li>
		<li><a href="?page=miracle-option-work">График работы</a>,</li>
		<li><a href="?page=miracle-option-address">Адрес организации</a>,</li>
		<li><a href="?page=miracle-option-social-site">Соц.сети организации</a></li>
	</ul>
	<?php
}


if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Логотип сайта',
		'menu_title'	=> 'Логотип сайта',
		'menu_slug'  	=> 'miracle-option-logo',
		'parent_slug'	=> 'miracle-company-settings',
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Номер телефона',
		'menu_title'	=> 'Номер телефона',
		'menu_slug'  	=> 'miracle-option-phone-number',
		'parent_slug'	=> 'miracle-company-settings',
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Электронная почта',
		'menu_title'	=> 'Электронная почта',
		'menu_slug'  	=> 'miracle-option-email-address',
		'parent_slug'	=> 'miracle-company-settings',
	));

	acf_add_options_page(array(
		'page_title' 	=> 'График работы',
		'menu_title'	=> 'График работы',
		'menu_slug'  	=> 'miracle-option-work',
		'parent_slug'	=> 'miracle-company-settings',
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Адрес организации',
		'menu_title'	=> 'Адрес организации',
		'menu_slug'  	=> 'miracle-option-address',
		'parent_slug'	=> 'miracle-company-settings',
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Соц.сети организации',
		'menu_title'	=> 'Соц.сети организации',
		'menu_slug'  	=> 'miracle-option-social-site',
		'parent_slug'	=> 'miracle-company-settings',
	));
}