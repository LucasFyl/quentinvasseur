<?php snippet('head') ?>
<?php snippet('header') ?>

<div id="pjax-container">

  <main class="main work-details" role="main">
	<div id="work-gallery">
		<?php foreach($page->images()->not('cover.jpg') as $image): ?>
	    <img src="<?php echo $image->url() ?>" alt="<?php echo $image->title() ?>" />
	  	<?php endforeach; ?>	
	</div>
	<a href="./" class="ajaxy close-gallery">Close gallery</a>
  </main>

</div>

<?php snippet('footer') ?>
