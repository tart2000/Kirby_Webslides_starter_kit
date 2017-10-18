<?php snippet('header') ?>

<article>
	<section>
		<div class="wrap size-50">
			<h2><?= $page->title() ?></h2>
			<?php foreach ($page->people()->toStructure()->sortBy('title') as $p) : ?>
				<div class="wrap people">
				<img class="avatar-80" src="<?= $p->img()->toFile()->url() ?>" alt="Avatar">
				<h3><?= $p->title() ?></h3>
				<?= $p->text()->kirbytext() ?>
			</div>
				<hr>
			<?php endforeach ?>

		</div>
	</section>
</article>

<?php snippet('footer') ?>