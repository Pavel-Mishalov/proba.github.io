import $ from 'jquery';

$(document).ready(function(){
    $('.mir-slider .slide .feedback-carousel').each(function(index, item){
        $(item).owlCarousel({
            items:1,
            merge:false,
            loop:false,
            margin:10,
            video:true,
            lazyLoad:true,
            dots:false,
            nav:false
        });
        var h = $(item).parent().parent().find('.slide__content').height();
        $(item).find('.item-video').height(h);
    });
});

// $('.mir-slider .slide .feedback-carousel').each(function(index, item){
//     $(item).on( 'refreshed.owl.carousel' ,function(event) {
//         var h = $(item).parent().parent().find('.slide__content').height();
//         $(item).find('.item-video').height(h);
//     });
// });