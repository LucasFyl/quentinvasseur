<?php snippet('head') ?>

<?php snippet('header') ?>

	<main role="main" class="main projects <?php echo $page->id() ?>">
	
		<aside class="projects-nav">
			<ul>
				<?php foreach($page->children()->visible() as $subpage): ?>
				<li>
					<h3><?php echo $subpage->title() ?></h3>
				</li>
				<?php endforeach; ?>
			</ul>
		</aside>
		
		<div class="projects-gallery">
			<ul>
				<?php foreach($page->children()->visible() as $subpage): ?>
				<li>image</li>
				<?php endforeach; ?>
			</ul>
		</div>			

	</main>

<?php snippet('footer') ?>
