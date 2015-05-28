function ratioImage() {
  $('nav ul li').each(function(){
    var box = $(this).find('a'),
        image = box.find('img');
    
    if ( box.height() < image.height() ) {
      TweenMax.set(image, {width:'100%'});
    } else if ( box.width() < image.width() ) {
      TweenMax.set(image, {height:'100%'});
    }
  });
}
function imagePlacement() {

  $('nav ul li').each(function(){
    var box = $(this).find('a');
    var image = $(this).find('img');
    var ml = '-' + (box.width() / 2);
    
    TweenMax.set(image, {marginLeft:ml});
    console.log(box, image, ml);
  });
}

function hoverIn() {
  var infos = $(this);
  var h = infos.find('span.h'),
        v = infos.find('span.v');
  var spanAnim = new TimelineMax();
  console.log(infos, h, v);
    spanAnim.to(infos, 0.25, {opacity:1,ease:Power3.easeInOut})
        .to(h, 0.07, {width:'50%',ease:Power3.easeInOut})
            .to(v, 0.15, {height:'3.03em',ease:Power3.easeInOut}, "-=0.25").play();
}
function hoverOut() {
  var infos = $(this);
  var h = infos.find('span.h'),
        v = infos.find('span.v');
  var spanAnimOut = new TimelineMax();
  console.log(infos, h, v);
    spanAnimOut.to(h, 0.07, {width:'0',ease:Power3.easeInOut})
             .to(v, 0.15, {height:'0',ease:Power3.easeInOut}, "-=0.25")
             .to(infos, 0.25, {opacity:0,ease:Power3.easeInOut}).play();
}

$(document).ready(function(){

    settersCollection();
    $(window).on('resize', ratioImage);

    var tlCollections = new TimelineMax({paused:true});
    tlCollections.set('#intro .text-fill', {opacity:0,width:'979px',top:'0',left:'280px',scale:0.5,marginTop:'-10px'})
                 .set('#intro ', {height:'auto',delay:0.5,onComplete:ratioImage})
                 .staggerTo('nav>ul>li', 0.55, {opacity:1,y:'0',ease:Power2.easeOut,delay:0.3}, -0.12)
                 .to('#intro .text-fill', 0.5, {color:'#ffffff',ease:Power3.easeInOut});
    tlCollections.play();


  $('nav > ul > li > a').hoverIntent(hoverIn, hoverOut, '.hoverInfos');

});