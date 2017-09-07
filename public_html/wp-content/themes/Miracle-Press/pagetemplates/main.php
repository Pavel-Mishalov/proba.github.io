<?php
/*
Template Name: Страница "Главная страница"
*/

	define( 'THEME', get_template_directory() );

	get_header();

	$title    = get_field( 'miracle-main-page-header-title' );
	$subtitle = get_field( 'miracle-main-page-header-subtitle' );
	$image    = get_field( 'miracle-main-page-header-image' );
	$atch     = ( get_field( 'miracle-main-page-header-image-attachment' ) ) ? 'fixed' : 'local';
	
	include( THEME . '/views_support/main/header.php' );

	$title    = get_field( 'miracle-main-page-price-list-title' );
	$subtitle = get_field( 'miracle-main-page-price-list-subtitle' );
	
	include( THEME . '/views_support/main/price-list.php' );
	
	$image    = get_field( 'miracle-main-page-cost-calculation-image' );
	$atch     = ( get_field( 'miracle-main-page-cost-calculation-image-attachment' ) ) ? 'fixed' : 'local';
	
	include( THEME . '/views_support/main/cost-calculation.php' );

	$title    = get_field( 'miracle-main-page-how-work-title' );
	
	include( THEME . '/views_support/main/how-work.php' );

	$title          = get_field( 'miracle-main-page-delivery-title' );
	$subtitle       = get_field( 'miracle-main-page-delivery-subtitle' );
	$subtitle       = str_replace( '<color>', '<span>', $subtitle );
	$subtitle       = str_replace( '</color>', '</span>', $subtitle );

	include( THEME . '/views_support/main/delivery.php' );

	$title = 'Наш адрес';

	include( THEME . '/views_support/main/map-address.php' );

	$title = get_field( 'miracle-main-page-work-title' );

	include( THEME . '/views_support/main/work.php' );

	$image = get_field( 'miracle-main-page-form-query-image' );
	$attachment = ( get_field( 'miracle-main-page-form-query-attachment' ) ) ? 'fixed' : 'inherid';;

	include( THEME . '/views_support/main/form-query.php' );

	$title = get_field('miracle-main-page-feedback-title');

	include( THEME . '/views_support/main/feedback.php' );

	$title = get_field('miracle-main-page-question-title');

	include( THEME . '/views_support/main/question.php' );

	$image = get_field( 'miracle-main-page-ask-question-image' );
	$attachment = ( get_field( 'miracle-main-page-ask-question-attachment' ) ) ? 'fixed' : 'inherid';

	include( THEME . '/views_support/main/ask-question.php' );
	
	get_footer();