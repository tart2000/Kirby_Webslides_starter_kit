<?php snippet('header') ?>

<article>
	<section>
		<div class="wrap size-50">
			<h2><?= $page->title() ?></h2>
			<?= $page->text()->kirbytext() ?>
			<ol>
				<?php foreach ($page->children()->visible() as $cat) : ?>
					<li><a href="<?= $cat->url() ?>"><?= $cat->title() ?></a></li>
				<?php endforeach ?>
			</ol>

		</div>
	</section>
</article>

<?php snippet('footer') ?>