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
    <body> 
        <div id="intro">
            <div class="text-fill">quentin&nbsp;vasseur</div>
        </div>
        <div id="content" class="collections">
            <!-- <h1>quentin&nbsp;vasseur</h1> -->
            <a href="../" class='back-link'><i class="icon-arrow_left"></i></a>
            <nav>
                <ul>
                    <?php foreach($pages->find('work/collections')->children()->visible() as $wo): ?>
                        <li><a href="<?php echo $wo->url() ?>"><?php echo html($wo->title()); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </div>
        <!-- <div class="background"></div> -->

        <?php echo js('assets/js/vendor/modernizr-2.6.2.min.js') ?>
        <?php echo js('assets/js/vendor/jquery-1.9.1.min.js') ?>
        <!--<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js"></script>-->
        <?php echo js('assets/js/vendor/TweenMax.min.js') ?>
        <?php echo js('assets/js/main.js') ?>
        <script>
            TweenMax.set('nav>ul>li:first-child', {opacity:0,x:'-100'});
            TweenMax.set('nav>ul>li:nth-child(2)', {opacity:0,y:'100'});
            TweenMax.set('nav>ul>li:nth-child(3)', {opacity:0,y:'-100'});
            TweenMax.set('nav>ul>li:last-child', {opacity:0,x:'100'});
            
            $(document).ready(function(){
                var tlCollections = new TimelineMax({paused:true});

                tlCollections.set('#intro .text-fill', {top:'0',left:'280px',scale:0.5,marginTop:'-10px',color:"rgba(255,255,255,0.8)",width:'979px'})
                             .set('#intro ', {height:'auto'})
                             .staggerTo('nav>ul>li', 0.55, {opacity:1,y:'0',x:'0',ease:Power3.easeOut,delay:0.25}, -0.15)
                             .to('#intro .text-fill', 0.5, {color:'#ffffff',ease:Power3.easeInOut});
                tlCollections.play();
            });
                
        </script>

    </body>
</html>
