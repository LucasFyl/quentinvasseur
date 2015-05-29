function nextColIn() {
	_this = $(this);
	_this.addClass('active');
	_this.empty();
	_this.html('<span class="nextColFull">next collection</span>').promise().done(function(){
		TweenMax.to('.nextColFull', 0.25, {top:0,opacity:1,ease:Power3.easeOut,delay:0.3})
	});
}

function nextColOut() {
	TweenMax.to('.nextColFull', 0.25, {top:"13px",opacity:0,ease:Power3.easeOut});
	$('.nextColFull').remove();
	$('a.nextCol').removeClass('active');
	setTimeout(function(){
		$('a.nextCol').html('<span class="justNext">next<span>').promise().done(function(){
			TweenMax.to('.justNext', 0.25, {top:0,opacity:1,ease:Power3.easeOut});
		});
	}, 250);
}
$(window).load(function() { 
    setTimeout(function(){
        TweenMax.to('#loader', 0.75, {display:'none',opacity:0,ease:Expo.easeOut});
    }, 250);
});


// Partie Collection single 
$(document).ready(function(){
	setSizeCollection();
	$('.next').on('click', navNext);
	$('.prev').on('click', navPrev);
	$('.superTop').on('click', superScroll);

	$(window).resize(setSizeCollection);

	$('a.nextCol').hoverIntent(nextColIn, nextColOut);

	function setSizeCollection() {
		var imgW = $(window).width() - 80 - 15,
			winW = $(window).width();
		TweenMax.set('#collection', {width:winW});
	}

	function navNext() {
		var	winH = $(window).height() + 'px',
			slide = "-=" + winH,
			imgLength = 0;
		// Récupère le nombre d'img
		$('.img-wrap > div').each(function(){imgLength += 1;});
		// definis taille et limite
		var wrapHeight = (imgLength*$(window).height())+'px',
			theOffset = (imgLength-1)*$(window).height();

		// definis taille de img-wrap
		TweenMax.set('img-wrap', {height:wrapHeight});

		// check if has prev
		if ( hasPrev == false &&  i < imgLength-1) {
			hasPrev = true;
			i ++;
			// anim + active prev si 1ère fois 
			TweenMax.to('.img-wrap', 1, {top:slide,ease:Power3.easeInOut,onComplete:function(){
				if ( hasPrev == true ) {
					$('.prev').removeClass('disabled');
				}
			}});
		} else if ( hasPrev == true &&  i < imgLength-1 ) {
			TweenMax.to('.img-wrap', 1, {top:slide,ease:Power3.easeInOut});
			i ++;
		}
		// Check si c'est la fin 
		if ( i == imgLength-1 ) {
			$('.next').addClass('hidden');
			$('.superTop').removeClass('hidden');	
		}

	}
	function navPrev() {
		var	winH = $(window).height() + 'px',
			slide = "+=" + winH,
			imgLength = 0;
		$('.img-wrap > div').each(function(){imgLength += 1;});

		if ( hasPrev == true ) {
			i --;
			// anim + active prev si 1ère fois 
			TweenMax.to('.img-wrap', 1, {top:slide,ease:Power3.easeInOut});
		} else {
			// do nothing
		}
		// Check si on est à la dernière
		if ( i !== imgLength-1 ) {
			$('.next').removeClass('hidden');
			$('.superTop').addClass('hidden');	
		}
		// Check si on retourne au premier
		if ( i == 0 ) {
			$('.prev').addClass('disabled');
			hasPrev = false;
		}
	}
	function superScroll(){
		TweenMax.to('.img-wrap', 2, {top:0,ease:Power3.easeInOut});
		$('.next').removeClass('hidden');
		$('.superTop').addClass('hidden');	
		i = 0; hasPrev = false;
	}

});