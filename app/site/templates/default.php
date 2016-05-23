<?php snippet('head') ?>
<?php snippet('header') ?>

<div id="pjax-container">
	<main class="<?php echo $page->id() ?>">
		<h1><?php echo $page->title() ?></h1>
		<h3><?php echo $page->text() ?></h3>
	</main>

</div>
<?php snippet('footer') ?>
