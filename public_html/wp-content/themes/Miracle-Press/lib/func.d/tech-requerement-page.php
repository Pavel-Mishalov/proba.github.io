<?php

///////////////////
// Settings Page //
///////////////////


if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Тех.требования к макетам',
		'menu_title'	=> 'Тех.требования к макетам',
		'menu_slug'  	=> 'miracle-company-modal',
		'position'      => 4,
		'icon_url'      => 'dashicons-editor-expand'
	));

}