<header class="<?php echo $page->id() ?>">
  <div class="container">
    <?php if($page->id() !== 'home'): ?>
    <h2><a href="<?php echo $site->url() ?>">Quentin Vasseur</a></h2>
    <?php endif; ?>
    <h1><?php echo $page->title() ?></h1> <!-- Quentin Vasseur, Collections, Illus etc.. -->
    <?php echo $page->text()->kirbytext() ?>

    <div class="about-wrap">
      <a <?php e($page->id() === 'about', ' class="active"') ?> href="<?php echo $pages->find('about')->url() ?>">About</a>
    </div>
  </div>
</header>
