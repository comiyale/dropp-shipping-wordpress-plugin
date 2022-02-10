jQuery(function($){
	"use strict";
	jQuery('.main-menu-navigation > ul').superfish({
		delay:       500,
		animation:   {opacity:'show',height:'show'},  
		speed:       'fast'
	});
});

function dropshipping_store_menu_open() {
	jQuery(".menu-brand.primary-nav").addClass('show');
}
function dropshipping_store_menu_close() {
	jQuery(".menu-brand.primary-nav").removeClass('show');
}

var dropshipping_store_Keyboard_loop = function (elem) {
    var dropshipping_store_tabbable = elem.find('select, input, textarea, button, a').filter(':visible');

    var dropshipping_store_firstTabbable = dropshipping_store_tabbable.first();
    var dropshipping_store_lastTabbable = dropshipping_store_tabbable.last();
    /*set focus on first input*/
    dropshipping_store_firstTabbable.focus();

    /*redirect last tab to first input*/
    dropshipping_store_lastTabbable.on('keydown', function (e) {
        if ((e.which === 9 && !e.shiftKey)) {
            e.preventDefault();
            dropshipping_store_firstTabbable.focus();
        }
    });

    /*redirect first shift+tab to last input*/
    dropshipping_store_firstTabbable.on('keydown', function (e) {
        if ((e.which === 9 && e.shiftKey)) {
            e.preventDefault();
            dropshipping_store_lastTabbable.focus();
        }
    });

    /* allow escape key to close insiders div */
    elem.on('keyup', function (e) {
        if (e.keyCode === 27) {
            elem.hide();
        }
        ;
    });
};

// scroll
jQuery(document).ready(function () {
	jQuery(window).scroll(function () {
	    if (jQuery(this).scrollTop() > 0) {
	        jQuery('#scrollbutton').fadeIn();
	    } else {
	        jQuery('#scrollbutton').fadeOut();
	    }
	});
	jQuery(window).on("scroll", function () {
	   document.getElementById("scrollbutton").style.display = "block";
	});
	jQuery('#scrollbutton').click(function () {
	    jQuery("html, body").animate({
	        scrollTop: 0
	    }, 600);
	    return false;
	});
});

jQuery(function($){
	$('.mobiletoggle').click(function () {
        dropshipping_store_Keyboard_loop($('.menu-brand.primary-nav'));
    });
    
    $(document).ready(function(){
		$(".product-cat").hide();
	    $("button.product-btn").click(function(){
	        $(".product-cat").toggle();
	    });
	}); 
});

// preloader
jQuery(function($){
    setTimeout(function(){
        $(".frame").delay(1000).fadeOut("slow");
    });
});

jQuery(document).ready(function() {
	var owl = jQuery('#product-slide .owl-carousel');
		owl.owlCarousel({
			nav: true,
			autoplay:false,
			autoplayTimeout:2000,
			autoplayHoverPause:true,
			loop: true,
			navText : ['<i class="fas fa-long-arrow-alt-left"></i>','<i class="fas fa-long-arrow-alt-right"></i>'],
			responsive: {
			  0: {
			    items: 1
			  },
			  600: {
			    items: 2
			  },
			  1000: {
			    items: 3
			}
		}
	})
});