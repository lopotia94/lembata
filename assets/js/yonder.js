window.onscroll = function() {
    if( window.pageYOffset > 2 ){
        $('.piki').css('top', '0');
        //$('.piki').css('animation', 'smoothScroll .2s forwards');
    }else{
        $('.piki').css('top', '40px');
        //$('.piki').css('animation', '');
    }
}
/*
function toggleDropdown(e) {
    const _d = $(e.target).closest('.dropdown'),
        _m = $('.dropdown-menu', _d);
    setTimeout(function() {
        const shouldOpen = e.type !== 'click' && _d.is(':hover');
        _m.toggleClass('show', shouldOpen);
        _d.toggleClass('show', shouldOpen);
        $('[data-toggle="dropdown"]', _d).attr('aria-expanded', shouldOpen);
    }, e.type === 'mouseleave' ? 300 : 0);
}

$('body')
    .on('mouseenter mouseleave', '.dropdown', toggleDropdown)
    .on('click', '.dropdown-menu a', toggleDropdown);
*/


$(document).ready(function() {
    
    
    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,

        fixedContentPos: false
    });

    $('.popup-foto').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image'
    });

    $("#owl-news").owlCarousel({
        items : 4,
        lazyLoad : true,
        margin:20,
        responsive : {
            // breakpoint from 0 up
            0 : {
                items:2
            },
            // breakpoint from 480 up
            480 : {
                items:2
            },
            // breakpoint from 768 up
            768 : {
                items:4
            }
        }
    });

     /* Owl Custom Nav */
	if ( typeof $.fn.owlCarousel == 'function') {

		$(".owl-custom-nav .owl-next").on('click',function(){
			$(this).closest('.owl-wrap').find('.owl-carousel').trigger('next.owl.carousel');
		});
		$(".owl-custom-nav .owl-prev").on('click',function(){
			$(this).closest('.owl-wrap').find('.owl-carousel').trigger('prev.owl.carousel');
		});

	}
	

     
});