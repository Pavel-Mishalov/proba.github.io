import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';


$(document).foundation();

import './BEM/after-navigation/mixin';
import './BEM/company-info/mixin';
import './BEM/product-card/__images/images';
import './BEM/navigation/navigation-scroll';
import './BEM/working-steps/mixin';
import './BEM/canvas-menu/mobile-menu';
import './BEM/menu/anchor';
import './BEM/work-categories/add-category';
import './BEM/work/resize';