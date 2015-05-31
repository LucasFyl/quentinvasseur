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
    
    <body id="about"> 

        <div id="loader"></div>
        
        <div class="container">
            <h1><?php echo $page->mainTitle1() ?></h1>
            <h2><?php echo $page->mainTitle2() ?></h2>

            <div class="description">
                <span>
                    <h3><?php echo $page->smallTitle1() ?></h3>
                    <p><?php echo $page->textCol1() ?></p>    
                </span>
                <span>
                    <h3><?php echo $page->smallTitle2() ?></h3>
                    <p><?php echo $page->textCol2() ?></p>    
                </span>
                
                </div>
            <div class="cta">
                <a href="mailto:lucasfayolle@orange.fr">Contactez moi !</a>
                <a href="#">télécharger mon CV</a>
            </div>
            <a href="<?php echo $pages->find('work')->url(); ?>" class="back">Back home</a>
        </div>


        <?php echo js('assets/js/vendor/modernizr-2.6.2.min.js') ?>
        <?php echo js('assets/js/vendor/jquery-1.9.1.min.js') ?>
        <?php echo js('assets/js/vendor/tweenmax.min.js') ?>
        <?php echo js('assets/js/main.js') ?>
        <?php echo js('assets/js/about.js') ?>
    </body>
</html>
