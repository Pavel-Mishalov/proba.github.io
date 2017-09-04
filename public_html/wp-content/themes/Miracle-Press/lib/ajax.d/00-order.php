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

add_action('wp_ajax_miracle_yandex_map_init', 'miracle_yandex_map_init');
add_action('wp_ajax_nopriv_miracle_yandex_map_init', 'miracle_yandex_map_init');

function miracle_yandex_map_init() {

	$nonce = $_POST['nonce'];

	if( ! wp_verify_nonce( $nonce, 'Miracle-Press' ) )
		die('Ошибка доступа');

	$map = json_decode( get_field( 'miracle-global-yandex-map-address', 'option') );
	$center_x = $map->center_lat;
	$center_y = $map->center_lng;

	$point_x = $map->marks[0]->coords[0];
	$point_y = $map->marks[0]->coords[1];

	$phone = get_field( 'miracle-global-settings-phone', 'option' );
	$timeWork = get_field( 'miracle-global-settings-graphic', 'option' );

	$balloonTitle = get_field( 'miracle-global-yandex-map-title', 'option' );
	$balloonSubtitle = get_field( 'miracle-global-yandex-map-subtitle', 'option' );

	$hint = get_field( 'miracle-global-yandex-map-hint', 'option' );
	
	$answer = array(
				'center'   => array(
								'x' => $center_x,
								'y' => $center_y
								),
				'point'    => array(
								'x'  => $point_x,
								'y'  => $point_y
								),
				'phone'    => $phone,
				'timeWork' => $timeWork,
				'balloon'  => array(
								'title'    => $balloonTitle,
								'subtitle' => $balloonSubtitle
								),
				'hint'     => $hint
			);
	echo json_encode($answer);
	wp_die();
}