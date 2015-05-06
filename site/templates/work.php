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
            <div class='empty' style="opacity:0;">quentin&nbsp;vasseur</div>
        </div>
       <div id="content">
            <!-- <h1>quentin&nbsp;vasseur</h1> -->
            <nav>
                <ul>
                    <li><a href="work/collections">collections</a><span></span></li>
                    <li><a href="work/illustrations">illustrations</a><span></span></li>
                    <li><a href="about">about</a><span></span></li>
                    <li><a href="work/sneakers">sneakers</a><span></span></li>
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
            TweenMax.set('#intro .text-fill', {opacity:0,width:'979px',top:'0',left:'280px',scale:0.5,marginTop:'-10px'})
            TweenMax.set('nav>ul>li:first-child', {opacity:0,x:'-150'});
            TweenMax.set('nav>ul>li:nth-child(2)', {opacity:0,y:'150'});
            TweenMax.set('nav>ul>li:nth-child(3)', {opacity:0,y:'-150'});
            TweenMax.set('nav>ul>li:last-child', {opacity:0,x:'150'});

            $(window).load(function() { 

                //anim du loader -> logo
                var animIntro = new TimelineMax({paused:true});
                animIntro.set('#intro .empty', {display:'none'})
                         .set('.vertical', {opacity:0,height:0})
                         .set('.horizontal', {opacity:0,width:0})
                         .set('#intro ', {height:'auto'})
                         .to('.text-fill', 0.3, {opacity:1,ease:Power2.easeInOut})
                         .staggerTo(['nav>ul>*'], 1, {opacity:1,y:'0',x:'0',ease:Power3.easeOut}, -0.25, "+=0.25")
                         .to('.white-bar', 0.33, {opacity:1,ease:Power3.easeOut}, "-=0.5" )
                         .to('.vertical', 1, {height:'100%',ease:Power3.easeOut},"-=0.5")
                         .to('.horizontal', 1, {width:'100%',ease:Power3.easeOut}, "-=1")
                         .to('#intro .text-fill', 0.7, {color:'#ffffff',ease:Power3.easeInOut}, "-=0.7")
                         ;
                animIntro.play();
            });
        </script>
    </body>
</html>
