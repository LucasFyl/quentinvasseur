/*jshint -W117 */
/*jslint latedef:false*/
/* jshint unused:false */
var isMobile = false; //initiate as false

$(document).ready(function(){
	'use strict';

 	initPage();
 	window.onresize = resize;

 	var pageTransition = new TimelineMax({paused:true});
 	$('body').on('click', 'a.ajaxy', function (event) {
 		// if( $('main.work').length ) {
	 	// 	pageTransition.staggerTo('main.work > section', 0.5, {y:50,opacity:0, ease: Expo.easeIn}, 0.1).play();
	  //       // console.log(pageTransition.duration());
   //      }

        // setTimeout(function(){
   			$.pjax({
	            url: $(this).attr('href'),
	            fragment: '#pjax-container',
	            container: '#pjax-container',
	            complete: function (data) { // Want to do something else? Left here for reasons
	            }
	        });
        // }, 800);
    	event.preventDefault();
	    
    });
    $(document).on('pjax:start', function () {
        NProgress.start(); // Start the nprogress bar
    });
    $(document).on('pjax:end', function () {
        NProgress.done(); // End the nprogress bar
    	initPage();
        // menuActive(); // Update the "active" class on links after ajax call
    });
 });

// Page load event
function initPage(){
	'use strict';

	// detectMobile();
	// hideLoader();
	menuActive();

	if ( $('main.projects').length ) {
		initProjectsPage();
	} 

	if ( $('main.work-details').length ) {
		initWorkDetailsPage();
	} 

	if( !$('main').hasClass('home') ) {
		$('.home-header').hide();
	} else {
		$('.home-header').show();
	}

	// } else if ( $('#content.work').length ) {
	// } else if ( $('#content.about').length ) {
	// } else if ( $('#content.contact').length ) {
	// }
}

function menuActive() {
    $('header .active').removeClass('active'); 
    var pgurl = window.location.href; 

    $("nav a").each(function () {
        if ($(this).attr("href") == pgurl || $(this).attr("href") == '') { 
            $(this).addClass("active"); 
        }
    });
}
function initProjectsPage() {
	'use strict';
	var mainNav = $('.projects-nav'),
		gallery = $('.projects-gallery');


	$('.sliders-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
		fade: true,
		asNavFor: '.projects-nav ul'
	});
	$('.sliders-slider ul').slick({
		arrows: true,
		dots: false,
		autoplay: true,
		speed: 1000,
		fade: true,
		autoplaySpeed: 4000,
		prevArrow: '<a class="arrow prev"><span>Prev Slide</span></a>',
		nextArrow: '<a class="arrow next"><span>Next Slide</span></a>'
	});
	$('.projects-nav ul').slick({
		slidesToShow: 40,
		slidesToScroll: 1,
		asNavFor: '.sliders-slider',
		dots: false,
		centerMode: false,
		focusOnSelect: true
	});
}
function initWorkDetailsPage() {
	var gallery = $('#work-gallery');

	gallery.slick({
		arrows: true, 
		prevArrow: '<a class="arrow prev"><span>Prev Slide</span></a>',
		nextArrow: '<a class="arrow next"><span>Next Slide</span></a>',
		dots: true, 
		autoplay: true, 
		speed: 500,
		fade: true
		// cssEase: 'cubic-bezier(0.19, 1, 0.22, 1)'
	});
}
function detectMobile(){
	'use strict';

	// device detection
	if( $('.isMobile').is(':visible') ) {
	 	isMobile = true;
	 	TweenMax.set('html',{overflowX:'hidden',position:'relative'});
	}

	if (isMobile === true) {
		console.log('isMobile:',isMobile);
	} else {
		console.log('isMobile:',isMobile);
	}

}
function hideLoader(){
	'use strict';

}
function resize() {
	'use strict';

}
function initSlider() {
	'use strict';

}
function landingAnimHome() {
	'use strict';

	// var landingTl = new TimelineMax({paused:true});
	// TweenMax.set('.menu .menu-trigger, .center span.title, .social li', {y:-30,opacity:0});
	// TweenMax.set('.center h1', {y:20,opacity:0});
	// TweenMax.set('.center a', {opacity:0,scale:0.5});

	// landingTl.to('.menu .menu-trigger', 0.25, {y:0,opacity:1,ease:Power3.easeOut})
	// 		 .staggerTo('.social li', 0.25, {y:0,opacity:1,ease:Power3.easeOut}, 0.1, '-=0.25')
	// 		 .staggerTo('.center span.title, .center h1', 0.5, {y:0,opacity:1,ease:Power2.easeOut}, 0.2)
	// 		 .to('.center a', 0.5, {opacity:1,scale:1,ease:Power2.easeOut});

	// setTimeout(function(){landingTl.play();}, 200);
}
