import $ from 'jquery';

var e = 'mailto:' + $('.menu .menu__email').text();
$('.menu .menu__email').attr('href',e);
var e2 = 'mailto:' + $('.footer__email').text();
$('.footer__email').attr('href',e2);