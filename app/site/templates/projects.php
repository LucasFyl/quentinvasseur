<?php snippet('head') ?>

<?php snippet('header') ?>

	<main role="main" class="main projects <?php echo $page->id() ?>">
	
		<aside class="projects-nav">
			<ul>
				<?php foreach($page->children()->visible() as $subpage): ?>
				<li>
					<h3><?php echo $subpage->title() ?></h3>
					<img src="<?php echo $subpage->image('01-cover.jpg')->url() ?>" alt="<?php echo $subpage->title() ?>" />
				</li>
				<?php endforeach; ?>
			</ul>
		</aside>
		
		<div class="projects-gallery">
			<ul class="sliders-slider">
				<?php foreach($page->children()->visible() as $subpage): ?>
				<li>
					<ul class="<?php echo $subpage->title() ?>">
						<?php foreach($subpage->images() as $image): ?>
						<li><img src="<?php echo $image->url() ?>" alt="<?php echo $subpage->title() ?>"></li>
						<?php endforeach; ?>
					</ul>
				</li>
				<?php endforeach; ?>
			</ul>
			
		</div>			

	</main>

<?php snippet('footer') ?>
