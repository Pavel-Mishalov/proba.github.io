import $ from 'jquery';

$(document).ready(function(){
	if( $('#yandex-map-address').length > 0 ){
		ymaps.ready( yandex_init );
		
		$('#yandex-map-address').css( 'pointer-events', 'none' );
		$('#map-address').click(function(){
			$('#yandex-map-address').css( 'pointer-events', 'auto' )
		});
		$('#map-address').mouseleave(function(){
			$('#yandex-map-address').css( 'pointer-events', 'none' )
		});
	}
});

var yandex_init = function(){

	$.ajax({
		method: "POST",
		url: ajax.url,
		data: {
			"action"  : 'miracle_yandex_map_init',
			"nonce"   : ajax.nonce
		},
		success: yandex_success,
		error: yandex_error
	});
}

var yandex_success = function(data){

	var points = $.parseJSON( data );
	
	var cx = points.center.x;
	var cy = points.center.y;
	var px = points.point.x;
	var py = points.point.y;
	var phone = points.phone;
	var timeWork = points.timeWork;
	var bt = points.balloon.title;
	var bst = points.balloon.subtitle;
	var hint = points.hint;
	var myMap = new ymaps.Map('yandex-map-address', {
			center: [ cx, cy ],
			zoom: 13
		}, {
			searchControlProvider: 'yandex#search'
		}),

		myPlacemark = new ymaps.Placemark( [ px, py ], {
			hintContent: hint,
			balloonContent: '<div class="wrap-form"><div class="wrap-form__form-title form-title"><h3 class="form-title__title">'+bt+'</h3><p class="form-title__subtitle" style="text-align: left;">'+bst+'</p></div><div class="wrap-form__form form"><div class="contacts-header" style="text-align:left"><a href="javascript:void(0)" class="contacts-header__phone">'+phone+'</a><p class="contacts-header__schedule">'+timeWork+'</p></div></div></div>'
		}, {
			iconLayout: 'default#image',
			//iconImageSize: [30, 30],
			//iconImageHref: 'https://avatanplus.com/files/resources/mid/57b4a96fdc61c15699b5dd1f.png',
			iconImageOffset: [0, 0]
		});

	myMap.geoObjects
		.add(myPlacemark);
}

var yandex_error = function(){
	console.log('Sorry. The request has not passed, maybe you violated the rules of using the site');
}