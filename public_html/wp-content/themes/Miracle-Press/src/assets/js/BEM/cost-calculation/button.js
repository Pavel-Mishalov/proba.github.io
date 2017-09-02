import $ from 'jquery';

var toggle_form = function(){
	$('.form__edition.edition *').not('.expanded-button *').not('.expanded-button').slideToggle(500);
	var text = ( $('.expanded-button__button').text() == 'Свернуть' ) ? 'Показать подробнее' : 'Свернуть';
	$('.expanded-button__button').text( text );
	$('.expanded-button').toggleClass('expanded-button_active');
}

$('.expanded-button__button').on('click', toggle_form );

$(document).ready( toggle_form );