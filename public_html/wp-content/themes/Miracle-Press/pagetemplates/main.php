<?php
/*
Template Name: Страница "Главная страница"
*/

	define( 'THEME', get_template_directory() );

	get_header();
	
	include( THEME . '/views_support/main/header.php' );
	
	include( THEME . '/views_support/main/price-list.php' );
	
	include( THEME . '/views_support/main/cost-calculation.php' );
	
	get_footer();