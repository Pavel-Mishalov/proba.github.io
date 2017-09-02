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