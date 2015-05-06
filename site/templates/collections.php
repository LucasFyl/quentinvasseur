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
    
    <body id="collections"> 
        <div id="sidebar">
            <a href="./" class="logo"></a>

            <a href="./" class='back-link'><i class="icon-arrow_left"></i></a> 
        </div>

        <div id="content" class="collections">
            <nav>
                <ul>
                    <?php foreach($pages->find('work/collections')->children()->visible() as $co): ?>
                        <li style='opacity:0;'>
                            <a href="<?php echo $co->url() ?>">
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
            $(document).ready(function(){

                TweenMax.set('nav>ul>li:first-child', {y:'-150'});
                TweenMax.set('nav>ul>li:nth-child(2)', {y:'-150'});
                TweenMax.set('nav>ul>li:nth-child(3)', {y:'-150'});
                TweenMax.set('nav>ul>li:last-child', {y:'-150'});

                $(window).on('resize', ratioImage);

                var tlCollections = new TimelineMax({paused:true});
                tlCollections.set('#intro .text-fill', {opacity:0,width:'979px',top:'0',left:'280px',scale:0.5,marginTop:'-10px'})
                             .set('#intro ', {height:'auto',delay:0.5,onComplete:ratioImage})
                             .staggerTo('nav>ul>li', 0.55, {opacity:1,y:'0',ease:Power2.easeOut,delay:0.3}, -0.12)
                             .to('#intro .text-fill', 0.5, {color:'#ffffff',ease:Power3.easeInOut});
                tlCollections.play();


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
