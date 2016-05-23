/*jshint -W117 */
/*jslint latedef:false*/
/* jshint unused:false */
(function(){
	'use strict';
	
	var Navigation = {
		init: function(){
			// TweenMax.set('#navigation', {display:'none'});
			// Navigation.bindEvents();
			// $(function () {
		    //     function menuActive() { // Function to toggle active menu links
		    //         $('.active').removeClass('active'); // Remove "active" class on menu links after an ajax call
		    //         var pgurl = window.location.href; // Get the page url
		    // // var pguri = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
		    // // "uri" gets only the link folder while "url" gets the entire link
		    // // Left here in case anyone out there uses $p->uri() on the menu
		    //         $(".menu a").each(function () {
		    //             if ($(this).attr("href") == pgurl || $(this).attr("href") == '') { // Compare url to links
		    //                 $(this).addClass("active"); // Set "active" class on menu links
		    //                 $(this).parents('li').children('a').addClass('active'); // Set "active" class on the parent of submenu links
		    //             }
		    //         });
		    //     }
		    // Requires jQuery 1.7+ to utilize the new "on" event attachment
		        
		        // $(document).ready(menuActive); // Update the "active" class on links on first load
		    // });
		},
		open: function(){
			var navTl = new TimelineMax({paused:true});

			// navTl.set('#navigation li, #navigation li a', {opacity:0})
			// navTl.play();
		},
		close: function(){
			// TweenMax.to('#navigation li', 0.35, {y:20,opacity:0,ease:Power3.easeIn});
			// TweenMax.set('#navigation', {display:'none',delay:0.35});
		},
		bindEvents: function(){
			// $('body').on('click', '.menu-trigger', function(event){
			// 	event.preventDefault();
			// 	if ( $(this).hasClass('trigger') ) {
			// 		$(this).removeClass('trigger').addClass('close');
			// 		Navigation.open();
			// 	} else {
			// 		$(this).removeClass('close').addClass('trigger');
			// 		Navigation.close();
			// 	}
			// });
			// $(document).keyup(function(event){
			// 	if(event.which === 27) {
			// 		$('.menu-trigger').removeClass('close').addClass('trigger');
			// 	  	Navigation.close();
			// 	}
			// });	
		}
	};

	Navigation.init();

})();