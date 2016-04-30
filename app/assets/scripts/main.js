/*jshint -W117 */
/*jslint latedef:false*/
/* jshint unused:false */
var isMobile = false; //initiate as false

$(document).ready(function(){
	'use strict';

 	initPage();
 	window.onresize = resize;
 });

// Page load event
function initPage(){
	'use strict';

	// detectMobile();
	// hideLoader();

	if ( $('main.projects').length ) {
		initProjectsPage();
	}
	// } else if ( $('#content.work').length ) {
	// } else if ( $('#content.about').length ) {
	// } else if ( $('#content.contact').length ) {
	// }
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
		prevArrow: '<a href="#" class="arrow prev"><span>Prev Slide</span></a>',
		nextArrow: '<a href="#" class="arrow next"><span>Next Slide</span></a>'
	});
	$('.projects-nav ul').slick({
		slidesToShow: 40,
		slidesToScroll: 1,
		asNavFor: '.sliders-slider',
		dots: false,
		centerMode: false,
		focusOnSelect: true
	});


	// // set first item as active
	// mainNav.find('li:first-child').addClass('active');
	// gallery.find('ul:first-child').addClass('active');

	// mainNav.on('click', 'li', function(){
	// 	mainNav.find('li').removeClass('active');
	// 	$(this).addClass('active');

	// 	var str1 = $(this).find('h3').text();
	// 	console.log(str1);
	// 	// var str2 = $('.projects-gallery ul').map(function () {
	// 	// 			    return $(this).attr('class');
	// 	// 			}).get();
	// 	// console.log(str1, str2)	;

	// 	// if ( str1.search(str2) != -1 ) {
	// 	// 	alert('match!');
	// 	// }
	// 	// sttr1.search(str2); // returns -1 if false
	// });


	// $('.projects-gallery ul').each(function(){
	// 	var _this = $(this);

	// 	_this.slick({
	// 	  arrows: true,
	// 	  dots: false,
	// 	  fade: true,
	// 	  autoplay: true
	// 	});

	// });
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
