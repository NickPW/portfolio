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

//// svg animate
//var current_frame, total_frames, path, length, handle, myobj;
//
//myobj = document.getElementById('myobj').cloneNode(true);
//
//var init = function() {
//  current_frame = 0;
//  total_frames = 60;
//  path = new Array();
//  length = new Array();
//  for(var i=0; i<4;i++){
//    path[i] = document.getElementById('i'+i);
//    l = path[i].getTotalLength();
//    length[i] = l;
//    path[i].style.strokeDasharray = l + ' ' + l; 
//    path[i].style.strokeDashoffset = l;
//  }
//  handle = 0;
//}
// 
// 
//var draw = function() {
//   var progress = current_frame/total_frames;
//   if (progress > 1) {
//     window.cancelAnimationFrame(handle);
//   } else {
//     current_frame++;
//     for(var j=0; j<path.length;j++){
//	     path[j].style.strokeDashoffset = Math.floor(length[j] * (1 - progress));
//     }
//     handle = window.requestAnimationFrame(draw);
//   }
//};
//
//init();
//draw();
//
//var rerun = function() {
//  var old = document.getElementsByTagName('div')[0];
//  old.parentNode.removeChild(old);
//  document.getElementsByTagName('body')[0].appendChild(myobj);
//  init();
//  draw();
//};