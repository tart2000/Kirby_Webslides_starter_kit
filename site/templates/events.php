<?php snippet('header') ?>

<article>
	<section>
		<div class="wrap size-50">
			<h2><?= $page->title() ?></h2>
			<?= $page->text()->kirbytext() ?>
			<?php foreach ($page->children() as $e) : ?>
				<a href="<?= $e->url() ?>"><?= $e->title() ?></a> 
			<?php endforeach ?>
		</div>
	</section>
</article>

<?php snippet('footer') ?>