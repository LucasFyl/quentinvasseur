<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Quentin Vasseur</title>
        <meta name="description" content=" ">  
        <link rel="icon" type="image/x-icon" href="/favicon.ico" />

        <?php echo css('assets/css/mfglabs_iconset.css') ?>
        <?php echo css('assets/css/avenirFF.css') ?>
        <?php echo css('assets/css/main.css') ?>
        <link rel="canonical" href="http://quentinvasseur.com/" />

    </head>
    
    <body id="illustrations"> 
        <div id="sidebar">
            <a href="<?php echo $page->parent()->url() ?>" class="logo"></a>

            <a href="<?php echo $page->parent()->url() ?>" class='back-link'><i class="icon-arrow_left"></i></a> 
        </div>

        <div id="content" class="illustrations">
            <nav>
                <ul>
                    <?php foreach($pages->find('work/illustrations')->children()->visible() as $co): ?>
                        <li style='opacity:0;'>
                            <a href="<?php echo $co->url() ?>">
                                <div class="hoverInfos">
                                    <h2><?php echo $co->title() ?>
                                    <span class="h top"></span>
                                    <span class="h bottom"></span>
                                    <span class="v left"></span>
                                    <span class="v right"></span>
                                    </h2>
                                </div>
                                <img src="<?php echo $co->files()->first()->url() ?>" alt="<?php echo $co->title() ?>"/>
                            </a>
                        </li>
                    <?php endforeach; ?>

                </ul>
            </nav>
        </div>

        <?php echo js('assets/js/vendor/modernizr-2.6.2.min.js') ?>
        <?php echo js('assets/js/vendor/jquery-1.9.1.min.js') ?>
        <!--<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js"></script>-->
        <?php echo js('assets/js/vendor/TweenMax.min.js') ?>
        <?php echo js('assets/js/main.js') ?>
        <script>


            function animateSpans(infos) {
                var h = infos.find('span.h'),
                    v = infos.find('span.v');
                spanAnim = new TimelineMax();
                spanAnim.to(h, 0.4, {width:'50%',ease:Power3.easeInOut,delay:0.5})
                        .to(v, 0.4, {height:'3.03em',ease:Power3.easeInOut,onComplete:function(){
                            setTimeout(function(){
                                killInfos();
                            },2000);
                        }}, "-=0.25");

                function killInfos() {
                    TweenMax.to(infos, 0.5, {opacity:0,ease:Power3.easeInOut});
                    TweenMax.to(v, 0.5, {height:0,ease:Power3.easeInOut});
                    TweenMax.to(h, 0.5, {width:0,ease:Power3.easeInOut});
                    infos = $();
                }

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


                $('nav > ul > li > a').hover(function(){
                    infos = $(this).find('.hoverInfos');
                    TweenMax.to(infos, 0.5, {opacity:1,ease:Power3.easeInOut,delay:0.3,onComplete:animateSpans(infos)});
                });

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
            });
                
        </script>

    </body>
</html>
