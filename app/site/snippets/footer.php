
      <?= js('/bower_components/jquery/dist/jquery.js') ?>
      <?= js('/bower_components/slick-carousel/slick/slick.js') ?>
      <?= js('/bower_components/jquery-pjax/jquery.pjax.js') ?>
      <?= js('/bower_components/nprogress/nprogress.js') ?>
      <?= js('/bower_components/gsap/src/minified/TweenMax.min.js') ?>

      <?= js('assets/scripts/main.js') ?>
      <?= js('assets/scripts/navigation.js') ?>


      <!-- build:remove -->
      <script src="http://localhost:35729/livereload.js"></script>
      <!-- /build -->

      <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
      <script>
         (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
          function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
          e=o.createElement(i);r=o.getElementsByTagName(i)[0];
          e.src='https://www.google-analytics.com/analytics.js';
          r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
          ga('create','UA-XXXXX-X','auto');ga('send','pageview');
      </script>
  </body>
</html>
