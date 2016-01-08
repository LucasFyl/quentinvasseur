<header>
  <div class="container">
    <h1><a href="<?php echo $site->url() ?>" class="logo"><?php echo $page->title() ?></a></h1>
    <?php echo $page->text()->kirbytext() ?>

    <div class="about-wrap">
      <a <?php e($page->id() === 'about', ' class="active"') ?> href="<?php echo $pages->find('about')->url() ?>">About</a>
    </div>
  </div>
</header>
