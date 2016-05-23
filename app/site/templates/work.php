<?php snippet('head') ?>
<?php snippet('header') ?>

<div id="pjax-container">

  <main class="main work" role="main">
      <?php foreach($page->children()->visible() as $subpage): ?>
      <section>
        <div class="vertical-center">
          <h2><?php echo $subpage->title() ?></h2>
          <a class="ajaxy" href="<?php echo $subpage->url() ?>">Launch gallery</a>
        </div>
        <img src="<?php echo $subpage->image('cover.jpg')->url() ?>" alt="<?php echo $subpage->title() ?>" />
      </section>
      <?php endforeach; ?>
  </main>

</div>

<?php snippet('footer') ?>
