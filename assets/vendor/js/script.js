(function($) {
	
   "use strict";	
	
	var mainwindow = $(window);
	
    // rev-slider


	
	//Hide Loading Box (Preloader)
	function stylePreloader() {
		if($('.preloader').length){
			$('.preloader').delay(200).fadeOut(500);
		}		
    }	
			
	
	//Accordion Box
	if($('.accordion-box').length){
		$(".accordion-box").on('click', '.acc-btn', function() {
			
			var outerBox = $(this).parents('.accordion-box');
			var target = $(this).parents('.accordion');
			
			if($(this).hasClass('active')!==true){
			$('.accordion .acc-btn').removeClass('active');
			
			}
			
			if ($(this).next('.acc-content').is(':visible')){
				return false;
			}else{
				$(this).addClass('active');
				$(outerBox).children('.accordion').removeClass('active-block');
				$(outerBox).children('.accordion').children('.acc-content').slideUp(300);
				target.addClass('active-block');
				$(this).next('.acc-content').slideDown(300);	
			}
		});	
	}
	

	  if ( $('#accordion > .panel').length) {
		$('#accordion > .panel').on('show.bs.collapse', function (e) {
			  var heading = $(this).find('.panel-heading');
			  heading.addClass("active-panel");
			  
	});
	$('#accordion > .panel').on('hidden.bs.collapse', function (e) {
        var heading = $(this).find('.panel-heading');
          heading.removeClass("active-panel");
    });
	}
	
	
  
	
	
	//service-list--
	if ($('.service-carousel .service-list').length) {
		$('.service-carousel .service-list').owlCarousel({
			loop:true,
			margin:0,
			nav:false,
			smartSpeed: 500,
			autoplay: 4000,
			items:5,
			dots:true,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				800:{
					items:3
				},
				1024:{
					items:5
				},
				1200:{
					items:5
				}
			}
		});    		
	}

    //letest-project--
	if ($('.fh-project-carousel  .list-project').length) {
		$('.fh-project-carousel  .list-project').owlCarousel({
			loop:true,
			margin:0,
			nav:true,
			smartSpeed: 500,
			autoplay: 4000,
			items:1,
			dots:false,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				800:{
					items:2
				},
				1024:{
					items:5
				},
				1200:{
					items:5
				}
			}
		});    		
	}	

   //partener--
	if ($('.list-item').length) {
		$('.list-item').owlCarousel({
			loop:true,
			margin:0,
			nav:false,
			smartSpeed: 500,
			autoplay: 4000,
			items:1,
			dots:false,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:2
				},
				600:{
					items:3
				},
				800:{
					items:4
				},
				1024:{
					items:5
				},
				1200:{
					items:5
				}
			}
		});    		
	}		
	
	//testimonial1--
	if ($('.testimonial1 .fh-testimonials').length) {
		$('.testimonial1 .fh-testimonials').owlCarousel({
			loop:true,
			margin:30,
			nav:false,
			smartSpeed: 500,
			autoplay: 4000,
			items:1,
			dots:true,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				800:{
					items:2
				},
				1024:{
					items:3
				},
				1200:{
					items:3
				}
			}
		});    		
	}
	
//testimonial2--
	if ($('.fh-testimonials-2 .testi-list').length) {
		$('.fh-testimonials-2 .testi-list').owlCarousel({
			loop:true,
			margin:30,
			nav:false,
			smartSpeed: 500,
			autoplay: 4000,
			items:1,
			dots:true,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				800:{
					items:1
				},
				1024:{
					items:1
				},
				1200:{
					items:1
				}
			}
		});    		
	}	
	
	//testimonial2--
	if ($('.fh-testimonials-3 .testi-list').length) {
		$('.fh-testimonials-3 .testi-list').owlCarousel({
			loop:true,
			margin:30,
			nav:false,
			smartSpeed: 500,
			autoplay: 4000,
			items:1,
			dots:true,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				800:{
					items:1
				},
				1024:{
					items:1
				},
				1200:{
					items:1
				}
			}
		});    		
	}	

	
	//postlist--
	if ($('.post-list').length) {
		$('.post-list').owlCarousel({
			loop:true,
			margin:0,
			nav:false,
			smartSpeed: 500,
			autoplay: 4000,
			items:1,
			dots:true,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				800:{
					items:2
				},
				1024:{
					items:4
				},
				1200:{
					items:4
				}
			}
		});    		
	}
	
	//project detail--
	if ($('.single-project .entry-thumbnail').length) {
		$('.single-project .entry-thumbnail').owlCarousel({
			loop:true,
			margin:0,
			nav:false,
			smartSpeed: 500,
			autoplay: 4000,
			items:1,
			dots:true,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				800:{
					items:1
				},
				1024:{
					items:1
				},
				1200:{
					items:1
				}
			}
		});    		
	}	
	
	//related_products--
	if ($('.rpslider .products').length) {
		$('.rpslider .products').owlCarousel({
			loop:true,
			margin:0,
			nav:true,
			smartSpeed: 500,
			autoplay: 4000,
			items:1,
			dots:false,
			navText: [ '<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				800:{
					items:3
				},
				1024:{
					items:3
				},
				1200:{
					items:3
				}
			}
		});    		
	}	
	
   	
	//Contact Form Validation
	if($('#contact-form').length){
		$('#contact-form').validate({
			rules: {
				username: {
					required: true
				},
				email: {
					required: true,
					email: true
				},
				phone: {
					required: true
				},
				message: {
					required: true
				}
			}
		});
	}

	//Update header style + Scroll to Top
	function scrolltotop() {
		if($('.scroll-to-top').length){
			var windowpos = mainwindow.scrollTop();
			if (windowpos >= 250) {
				$('.scroll-to-top').fadeIn(300);
			} else {
				$('.scroll-to-top').fadeOut(300);
			}
		}
	}
	
	// Scroll to a Specific Div
	if($('.scroll-to-target').length){
		$(".scroll-to-target").on('click', function() {
			var target = $(this).attr('data-target');
		   // animate
		   $('html, body').animate({
			   scrollTop: $(target).offset().top
			 }, 1000);
	
		});
	}
	
	// slider-range
	if($('#slider-range').length){
	  $( function() {
		$( "#slider-range" ).slider({
		  range: true,
		  min: 0,
		  max: 500,
		  values: [ 75, 300 ],
		  slide: function( event, ui ) {
			$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		  }
		});
		$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
		  " - $" + $( "#slider-range" ).slider( "values", 1 ) );
	  });	
	 }

 
    //Input Quantity Up & Down
    function quantity_changer() {
		$('#quantity-holder').on('click', '.quantity-plus', function () {
			var $holder = $(this).parents('.quantity-holder');
			var $target = $holder.find('input.quantity-input');
			var $quantity = parseInt($target.val(),10);
			if ($.isNumeric($quantity) && $quantity > 0) {
				$quantity = $quantity + 1;
				$target.val($quantity);
			} else {
				$target.val($quantity);
			}
		}).on('click', '.quantity-minus', function () {
			var $holder = $(this).parents('.quantity-holder');
			var $target = $holder.find('input.quantity-input');
			var $quantity = parseInt($target.val(),10);
			if ($.isNumeric($quantity) && $quantity >= 2) {
				$quantity = $quantity - 1;
				$target.val($quantity);
			} else {
				$target.val(1);
			}
		});

	}


	
	//counter number changer
	function counter_number() {
		var timer = $('.timer');
		if(timer.length) {
			timer.appear(function () {
				timer.countTo();
			})
		}
	}
	
			
	
	  
/* ==========================================================================
   When document is ready, do
   ========================================================================== */
   
  $(document).on('ready', function() {
    counter_number();
    quantity_changer();
  });

  
  
/* ==========================================================================
   When document is Scrollig, do
   ========================================================================== */
  
  mainwindow.on('scroll', function() {
	scrolltotop();
    
  });
  
/* ==========================================================================
   When document is loading, do
   ========================================================================== */
  
  mainwindow.on('load', function() {
    stylePreloader();
  });
  

/* ==========================================================================
   When Window is resizing, do
   ========================================================================== */
  
  mainwindow.on('resize', function() {
  });	  
	  
	  
	  	

})(window.jQuery);