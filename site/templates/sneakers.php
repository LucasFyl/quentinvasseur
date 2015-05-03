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
    
       <div id="content">
            <h1>quentin&nbsp;vasseur</h1>
            <nav>
                <ul>
                    <li class="direct"><a href="./about">about</a></li>
                    <li><a href="#" class="dropdown">collections</a>
                        <ul class="dropdown-menu">
                            <?php foreach($pages->find('work/collections')->children()->visible() as $wo): ?>
                                <li class="direct"><a href="<?php echo $wo->url() ?>"><?php echo html($wo->title()); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li><a href="#" class="dropdown">illustrations</a>
                        <ul class="dropdown-menu">
                            <?php foreach($pages->find('work/illustrations')->children()->visible() as $wo): ?>
                                <li class="direct"><a href="<?php echo $wo->url() ?>"><?php echo html($wo->title()); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li><a href="#" class="dropdown-sneaker">sneakers</a>
                        <ul class="dropdown-menu" >
                            <?php foreach($pages->find('work/sneakers')->children()->visible() as $wo): ?>
                                <li class="direct"><a href="<?php echo $wo->url() ?>"><?php echo html($wo->title()); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                </ul>
            </nav>
            <span class='bg'></span>
        </div>
        <div class="background"></div>

        <?php echo js('assets/js/vendor/modernizr-2.6.2.min.js') ?>
        <?php echo js('assets/js/vendor/jquery-1.9.1.min.js') ?>
        <?php echo js('assets/js/vendor/tweenmax.min.js') ?>
        <?php echo js('assets/js/collections.js') ?>
        
    </body>
</html>
