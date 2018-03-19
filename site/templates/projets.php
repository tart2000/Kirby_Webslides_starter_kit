<?php snippet('header') ?>

<article>
	<section>
		<div class="wrap">
			<h2><?= $page->title() ?></h2>
			<?= $page->text()->kirbytext() ?>

			<hr>

			<?php foreach ($page->children() as $pro) : ?>
				<a href="<?= $pro->url() ?>"><?= $pro->title() ?></a>
			<?php endforeach ?>
			
		</div>
	</section>
</article>

<?php snippet('footer') ?>