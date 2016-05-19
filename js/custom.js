// sticky navbar
(function($) {
$(document).ready(function () {
	$(".navbar").sticky({
		topSpacing: 0
	});
});
})( jQuery );

// smooth scroll
(function($) {
$(document).ready(function () {
    $('.scrollto a[href*=#]:not([href=#])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - 50
                }, 1000);
                return false;
            }
        }
    });
});
})( jQuery );

// scroll to top
(function($) {
$(document).ready(function(){
	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 800) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
});
})( jQuery );
    
// parallax
(function($) {
$(function() {
    $.stellar();
});
})( jQuery );

// main flex slider
(function($) {
$(window).load(function() {
    $('.main-flex-slider').flexslider({
        slideshowSpeed: 5000,
        directionNav: false,
        animation: "fade",
        controlNav: false
    });
});
})( jQuery );

// owl carousel
(function($) {
$(document).ready(function() {
    $("#testi-carousel").owlCarousel({
        items: 1,
		loop:true,
		autoplay:true,
		autoplayTimeout:5000,
		autoplayHoverPause:true
    });
});
})( jQuery );

// counter up
(function($) {
jQuery(document).ready(function($) {
    $('.counter').counterUp({
        delay: 100,
        time: 800
    });
});
})( jQuery );

// magnific popup
(function($) {
jQuery(document).ready(function($) {
	$('.show-image').magnificPopup({
		type: 'image'
	});
});
})( jQuery );

// wow animate
(function($) {
var wow = new WOW(
        {
            boxClass: 'wow', // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset: 100, // distance to the element when triggering the animation (default is 0)
            mobile: false // trigger animations on mobile devices (true is default)
        }
);
wow.init();
})( jQuery );