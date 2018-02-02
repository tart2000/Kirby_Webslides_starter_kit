<?php snippet('header') ?>

<article>
	<section>
		<div class="wrap effects">
			<h2><?= $page->title() ?></h2>
			<?= $page->text()->kirbytext() ?>
			<?php $count = 1 ?>
			<ul class="flexblock features">
				<?php foreach ($page->effects()->toStructure() as $p) : ?>
					<li>
				        <div>
				          <h2><?= $count.' - '.$p ->title() ?></h2>
				          <?php $count++ ?>
				        </div>
				      </li>
				<?php endforeach ?>
			</ul>
		</div>
	</section>
</article>

<?php snippet('footer') ?>