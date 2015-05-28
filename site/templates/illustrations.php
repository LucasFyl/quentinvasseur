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
            <a href="<?php echo $site->url() ?>" class="logo"></a>

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
        <?php echo js('assets/js/vendor/hoverIntent.js') ?>
        <?php echo js('assets/js/illustrations.js') ?>
        <?php echo js('assets/js/main.js') ?>


    </body>
</html>
