<?php snippet('header') ?>

<article id="webslides">
	<?php foreach ($page->parent()->children()->filterBy('template','competence') as $c) : ?>
		<section>
			<div class="wrap size-80">
				<h3><?= $c->title() ?></h3>
				<?= $c->description()->kirbytext() ?>
				<?php if ($c->domaine() != '') : ?>
					<?php $domaines = $c->domaine()->split() ?>
					<?php foreach ($domaines as $d): ?>
						<div class="toggle">
							<?php echo page('domaines')->children()->find($d)->title() ?>
						</div>
					<?php endforeach ?>
				<?php endif ?>
			</div>
		</section>
	<?php endforeach ?>
</article>

<?php snippet('footer') ?>