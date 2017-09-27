<?php snippet('header') ?>

<article>
	<section>
		<div class="wrap size-50">
			<h2><?= $page->title() ?></h2>
			<?= $page->text()->kirbytext() ?>

			<?php foreach ($page->children()->visible() as $cat) : ?>
				<ul>
					<li><?= $cat->num() ?> - <a href="<?= $cat->url() ?>"><?= $cat->title() ?></a></li>
				</ul>
			<?php endforeach ?>

		</div>
	</section>
</article>

<?php snippet('footer') ?>