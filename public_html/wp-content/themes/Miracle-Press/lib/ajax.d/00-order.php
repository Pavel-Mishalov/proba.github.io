<?php

add_action('wp_ajax_miracle_add_work_cat', 'miracle_add_work_cat');
add_action('wp_ajax_nopriv_miracle_add_work_cat', 'miracle_add_work_cat');

function miracle_add_work_cat() {

	wp_reset_postdata();
	$nonce = $_POST['nonce'];

	if( ! wp_verify_nonce( $nonce, 'Miracle-Press' ) )
		die('Ошибка доступа');
	
	$html = miracle_get_work_cards( 6, $_POST['cat'], $_POST['page'] );
	echo $html;
	wp_die();
}

add_action('wp_ajax_miracle_add_new_work', 'miracle_add_new_work');
add_action('wp_ajax_nopriv_miracle_add_new_work', 'miracle_add_new_work');

function miracle_add_new_work() {

	wp_reset_postdata();
	$nonce = $_POST['nonce'];

	if( ! wp_verify_nonce( $nonce, 'Miracle-Press' ) )
		die('Ошибка доступа');
	
	$html = miracle_get_work_cards( 3, $_POST['cat'], $_POST['page'], $_POST['offset'] );
	echo $html;
	wp_die();
}