import $ from 'jquery';

var e = 'mailto:' + $('.menu .menu__email').text();
$('.menu .menu__email').attr('href',e);