<?php snippet('head') ?>

<?php snippet('header') ?>

  <main class="main" role="main">

    <?php foreach($site->children()->not('about')->visible() as $subpage): ?>
    <section class="toSubpage">
      <h2><?php echo $subpage->title() ?></h2>
      <a href="<?php echo $subpage->url() ?>">Discover</a>
    </section>
    <?php endforeach; ?>


  </main>

<?php snippet('footer') ?>
