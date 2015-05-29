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
        <div id="collection">

            <div id="sidebar">
                <a href="<?php echo $site->url() ?>" class="logo"></a>
                <a href="<?php echo $page->parent()->url() ?>" class='back-link'><i class="icon-arrow_left"></i></a> 

                <nav>
                    <a href="#"class="prev disabled"></a>
                    <a href="#"class="next"></a>
                    <a href="#" class="superTop hidden"></a>
                    <?php if($page->hasNext() == true): ?>
                    <a href="<?php echo $page->next()->url() ?>" class="nextCol">next</a>
                    <?php endif; ?>
                    <?php if($page->hasNext() == false): ?>
                    <a href="./" class="back-home">home</a>
                    <?php endif; ?>
                </nav>

            </div>

            <section class="img-wrap">
                <?php foreach($page->images() as $image): ?>
                    <div class="single-img">
                        <img src="<?php echo $image->url() ?>" alt="<?php echo html($page->title())?>" class="<?php echo html($image->title()) ?>"/>
                    </div>
                <?php endforeach ?>
            </section>
        </div>

        <?php echo js('assets/js/vendor/modernizr-2.6.2.min.js') ?>
        <?php echo js('assets/js/vendor/jquery-1.9.1.min.js') ?>
        <?php echo js('assets/js/vendor/tweenmax.min.js') ?>
        <?php echo js('assets/js/vendor/hoverIntent.js') ?>
        <?php echo js('assets/js/main.js') ?>
        <?php echo js('assets/js/collection.js') ?>
        
        <script>
            var hasPrev = false, i = 0;
        </script>
    </body>
</html>
