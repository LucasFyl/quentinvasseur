<?php snippet('head') ?>
<?php snippet('header') ?>

  <main class="main work" role="main">
      <?php foreach($page->children()->visible() as $subpage): ?>
      <section>
        <div class="vertical-center">
          <h2><?php echo $subpage->title() ?></h2>
          <a href="<?php echo $subpage->url() ?>">Launch gallery</a>
        </div>
      </section>
      <?php endforeach; ?>
  </main>

<?php snippet('footer') ?>
