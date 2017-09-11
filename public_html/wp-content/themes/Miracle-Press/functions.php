<?php

include('lib/init.php');
// include('lib/ajax.php');


register_nav_menu( 'main', 'Главное меню' );


/* PTE and Yoast SEO conflict fix. https://wordpress.org/support/topic/js-error-and-upload-failed */
remove_action('dbx_post_advanced', 'pte_edit_form_hook_redirect');

// Option page(s)
if( function_exists('acf_add_options_page') ) {
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Дополнительные настройки',
		'menu_title'	=> 'Доп настройки',
		'menu_slug'	=> 'acf-options-general',
		'parent_slug'	=> 'options-general.php',
	));
}