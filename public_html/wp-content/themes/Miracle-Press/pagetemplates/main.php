<?php
/*
Template Name: Страница "Главная страница"
*/

define( 'THEME', get_template_directory() );

get_header();

	$blocks = get_field( 'miracle-main-page-builder' );

	foreach( $blocks as $block ):
		switch ( $block['block'] ) {
			case 'first-screen':
					$title    = get_field( 'miracle-main-page-header-title' );
					$subtitle = get_field( 'miracle-main-page-header-subtitle' );
					$image    = get_field( 'miracle-main-page-header-image' );
					$atch     = ( get_field( 'miracle-main-page-header-image-attachment' ) ) ? 'fixed' : 'local';
					
					include( THEME . '/views_support/main/header.php' );
				break;
			case 'price-list':
					$title    = get_field( 'miracle-main-page-price-list-title' );
					$subtitle = get_field( 'miracle-main-page-price-list-subtitle' );
					
					include( THEME . '/views_support/main/price-list.php' );
				break;
			case 'cost-calculation':
					$image = get_field( 'miracle-main-page-cost-calculation-image' );
					$atch  = ( get_field( 'miracle-main-page-cost-calculation-image-attachment' ) ) ? 'fixed' : 'local';
					
					include( THEME . '/views_support/main/cost-calculation.php' );
				break;
			case 'how-work':
					$title    = get_field( 'miracle-main-page-how-work-title' );
	
					include( THEME . '/views_support/main/how-work.php' );
				break;
			case 'delivery':
					$title    = get_field( 'miracle-main-page-delivery-title' );
					$subtitle = get_field( 'miracle-main-page-delivery-subtitle' );
					$subtitle = str_replace( '<color>', '<span>', $subtitle );
					$subtitle = str_replace( '</color>', '</span>', $subtitle );

					include( THEME . '/views_support/main/delivery.php' );
				break;
			case 'map-address':
					$title = 'Наш адрес';

					include( THEME . '/views_support/main/map-address.php' );
				break;
			case 'work':
					$title = get_field( 'miracle-main-page-work-title' );

					include( THEME . '/views_support/main/work.php' );
				break;
			case 'form-query':
					$image     = get_field( 'miracle-main-page-form-query-image' );
					$attachment = ( get_field( 'miracle-main-page-form-query-attachment' ) ) ? 'fixed' : 'inherid';;

					include( THEME . '/views_support/main/form-query.php' );
				break;
			case 'feedback':
					$title = get_field('miracle-main-page-feedback-title');

					include( THEME . '/views_support/main/feedback.php' );
				break;
			case 'question':
					$title = get_field('miracle-main-page-question-title');

					include( THEME . '/views_support/main/question.php' );
				break;
			case 'ask-question':
					$image = get_field( 'miracle-main-page-ask-question-image' );
					$attachment = ( get_field( 'miracle-main-page-ask-question-attachment' ) ) ? 'fixed' : 'inherid';

					include( THEME . '/views_support/main/ask-question.php' );
				break;
			
			default:
				break;
		}
	endforeach;

get_footer();
