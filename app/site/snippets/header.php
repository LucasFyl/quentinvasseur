<header class="home-header">
  <h1 class="logo"><a href="<?php echo $site->url() ?>">Quentin Vasseur</a></h1>
</header>

<header class="main-header <?php echo $page->id() ?>">
  <h1 class="logo"><a href="<?php echo $site->url() ?>">Quentin Vasseur</a></h1>
  <nav>
    <?php foreach($pages->visible() as $p): ?>
      <a <?php e($p->isOpen(), ' class="active"') ?>  href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a>
    <?php endforeach; ?>
  </nav>  
</header>