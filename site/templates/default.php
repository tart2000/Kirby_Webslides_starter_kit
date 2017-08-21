<?php snippet('header') ?>

<article>
	<section>
		<div class="wrap size-50">
			<h2><?= $page->title() ?></h2>
			<?= $page->text()->kirbytext() ?>
		</div>
	</section>
</article>

<?php snippet('footer') ?>