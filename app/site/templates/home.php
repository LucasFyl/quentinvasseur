<?php snippet('head') ?>
<?php snippet('header') ?>

<div id="pjax-container">
  <main role="main" class="main <?php echo $page->id() ?>">

    <?php foreach($site->children()->not('about')->visible() as $subpage): ?>
    <section class="toSubpage">
      <div class="container">
        <a href="<?php echo $subpage->url() ?>" class="ajaxy">
          <div class="vertical-center">
            <h2><?php echo $subpage->title() ?></h2>
          </div>
        </a>
      </div>
    </section>
    <?php endforeach; ?>

  </main>
</div>
<?php snippet('footer') ?>
