import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';


$(document).foundation();

import './owl.carousel';

import './browser/browser';

import './BEM/after-navigation/mixin';
import './BEM/after-navigation/button';
import './BEM/company-info/mixin';
import './BEM/product-card/__images/images';
import './BEM/product-card/__product-modal/modal';
import './BEM/navigation/navigation-scroll';
import './BEM/working-steps/mixin';
import './BEM/canvas-menu/mobile-menu';
import './BEM/menu/anchor';
import './BEM/work-categories/add-category';
import './BEM/contacts-header/__phone/phone';
import './BEM/contacts-header/__email/email';
import './BEM/work/resize';
import './BEM/requer/link';
import './BEM/cost-calculation/button';
import './BEM/work/add-work-posts';
import './BEM/map-address/yandex-map';
import './BEM/mir-slider/slide';
import './BEM/mir-slider/owl-video';
import './BEM/mir-slider/carousel';
import './BEM/mir-tab/click-tab';

$(document).ready(function(){
	if( $.browser.msie ){
		$('#header, #cost-calculation, #ask-question').css('background-attachment', 'scroll');
	}
});