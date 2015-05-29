function settersHome(){
    TweenMax.set('.vertical', {opacity:0,height:0});
    TweenMax.set('.horizontal', {opacity:0,width:0});
    TweenMax.to('#intro .text-fill', 1, {opacity:1,ease:Power1.easeInOut,repeat:2,yoyo:true,onComplete:function(){
        animIntro.play();
    }});
}

var navList = [
    'nav>ul>li:last-child',
    'nav>ul>li:nth-child(3)',
    'nav>ul>li:nth-child(2)',
    'nav>ul>li:first-child'
];

var animIntro = new TimelineMax({paused:true});
animIntro.set('#intro .empty', {display:'none'})
         .to('#intro .text-fill', 1.2, {top:'10%',scale:1.65,ease:Power4.easeOut})
         .staggerFromTo(navList, 0.65, {opacity:0,scale:0,y:50}, {opacity:1,scale:1,y:0,ease:Expo.easeOut}, -0.15, "+=0.25")
         .to('.white-bar', 0.33, {opacity:1,ease:Power3.easeOut}, "-=0.5" )
         .to('.vertical', 1, {height:'100%',ease:Power3.easeOut},"-=0.5")
         .to('.horizontal', 1, {width:'100%',ease:Power3.easeOut}, "-=1")
         .to('#intro .text-fill', 0.7, {color:'#ffffff',ease:Power3.easeInOut}, "-=1")
         ;

$(window).load(function() { 
    setTimeout(function(){
        TweenMax.to('#loader', 0.25, {display:'none',opacity:0,ease:Expo.easeOut,onComplete:function() {
            settersHome();
        }})
    }, 500);
});