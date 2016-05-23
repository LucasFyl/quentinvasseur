/*jshint ignore:start */
var isMobile = false; //initiate as false

$(document).ready(function(){
	'use strict';

 	initPage();
 	window.onresize = resize;

 	var pageTransition = new TimelineMax({paused:true});
 	$('body').on('click', 'a.ajaxy', function (event) {
   			$.pjax({
	            url: $(this).attr('href'),
	            fragment: '#pjax-container',
	            container: '#pjax-container',
	            complete: function (data) { // Want to do something else? Left here for reasons
	            }
	        });
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
		// TweenMax.set('#loader' {display:'none'});
		$('#loader').remove();
		$('.home-header').hide();
	} else {
		hideMainLoader();
		$('.home-header').show();
	}
}
function hideMainLoader() {
	'use strict';

	var hideLoaderTl = new TimelineMax({paused:true});

	hideLoaderTl
		.set('body', {className:'+=locked'})
		.set('header', {y:-100}).set('.toSubpage', {y:70,opacity:0})
		.to('#loader .above', 0.5, {width: '34%', ease:Power3.easeIn})
		.to('#loader .above', 0.5, {width: '55%', ease:Power3.easeOut})
		.to('#loader .above', 0.5, {width: '78%', ease:Power3.easeOut})
		.to('#loader .above', 0.75, {width: '100%', ease:Power3.easeIn})
		.to('#loader .above, #loader .under', 0.5, {y:200, opacity:0, ease:Expo.easeIn})
		.to('#loader', 1, {opacity:0, display:'none', ease:Power4.easeOut})
		.to('.home-header', 0.75, {y:0, ease:Expo.easeOut})
		.set('header', {y:0})
		.staggerTo('.toSubpage', 0.5, {y:0, opacity:1, ease:Expo.easeOut}, 0.1)
		.set('body', {className:'-=locked'})
		.play();
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
/*jshint ignore:end */