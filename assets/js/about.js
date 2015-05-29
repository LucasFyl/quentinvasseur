var aboutTl = new TimelineMax({paused:true});
var titles = ['h2', 'h1'];
TweenMax.set('#about .container > *', {css:{opacity:0}});
TweenMax.set('h1, h2, .cta', {css:{y:30}});

aboutTl.staggerTo(titles, 0.3, {css:{y:0,opacity:1},ease:Power1.easeOut}, -0.125);
aboutTl.to('.description', 0.5, {css:{opacity:1},ease:Power1.easeOut});
aboutTl.to('.cta', 0.5, {css:{y:0,opacity:1},ease:Power2.easeOut});
aboutTl.to('.back', 0.5, {css:{opacity:1},ease:Power3.easeOut}, "-=0.3");
$(window).load(function() { 
	setTimeout(function(){
        TweenMax.to('#loader', 0.25, {display:'none',opacity:0,ease:Expo.easeOut,onComplete:function() {
            aboutTl.play();
        }})
    }, 250);
});