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
        <div id="loader"></div>

        <div id="intro">
            <div class="text-fill">quentin&nbsp;vasseur</div>
            <div class='empty' style="opacity:0;">quentin&nbsp;vasseur</div>
        </div>

       <div id="content">
            <!-- <h1>quentin&nbsp;vasseur</h1> -->
            <nav>
                <ul>
                    <li><a href="<?php echo url('work/collections'); ?>">collections</a><span></span></li>
                    <li><a href="<?php echo url('work/illustrations'); ?>">illustrations</a><span></span></li>
                    <li><a href="<?php echo url('about'); ?>">about</a><span></span></li>
                    <li><a href="<?php echo url('work/sneakers'); ?>">sneakers</a><span></span></li>
                </ul>
                <div class="box">
                    <div class="vertical v-1 white-bar"></div>
                    <div class="vertical v-2 white-bar"></div>
                    <div class="vertical v-3 white-bar"></div>
                    <div class="horizontal h-1 white-bar"></div>
                    <div class="horizontal h-2 white-bar"></div>
                    <div class="horizontal h-3 white-bar"></div>
                </div>
            </nav>
        </div>
        <!-- <div class="background"></div> -->

        <?php echo js('assets/js/vendor/modernizr-2.6.2.min.js') ?>
        <?php echo js('assets/js/vendor/jquery-1.9.1.min.js') ?>
        <!--<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js"></script>-->
        <?php echo js('assets/js/vendor/TweenMax.min.js') ?>
        <?php echo js('assets/js/main.js') ?>
        <script>

        $(window).load(function() { 
            TweenMax.set('.vertical', {opacity:0,height:0});
            TweenMax.set('.horizontal', {opacity:0,width:0});
            TweenMax.set('#intro .empty', {display:'none'});
            TweenMax.set('#intro .text-fill', {top:'10%',scale:1.65});

            var navList = [
                'nav>ul>li:last-child',
                'nav>ul>li:nth-child(3)',
                'nav>ul>li:nth-child(2)',
                'nav>ul>li:first-child'
            ];
            TweenMax.set(navList, {opacity:0});

            setTimeout(function(){
                TweenMax.to('#loader', 0.25, {display:'none',opacity:0,ease:Expo.easeOut,onComplete:function() {
                    // settersHome();
                    var tlw = new TimelineMax();
                    tlw.staggerFromTo(navList, 0.65, {opacity:0,scale:0,y:50}, {opacity:1,scale:1,y:0,ease:Expo.easeOut}, -0.15, "+=0.25")
                       .to('.text-fill', 0.5, {opacity:1,repeat:2,yoyo:true,ease:Power1.easeOut})
                       .to('.white-bar', 0.33, {opacity:1,ease:Power3.easeOut}, "-=0.5" )
                       .to('.vertical', 1, {height:'100%',ease:Power3.easeOut},"-=0.5")
                       .to('.horizontal', 1, {width:'100%',ease:Power3.easeOut}, "-=1")
                       .to('.text-fill', 0.25, {color:'white',ease:Expo.easeOut}, "-=1");
                }})
            }, 250);
        });
        // </script>
    </body>
</html>
