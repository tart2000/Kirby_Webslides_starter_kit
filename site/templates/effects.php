<?php snippet('header') ?>

<article>
	<section>
		<div class="wrap">
			<h2><?= $page->title() ?></h2>
			<?= $page->text()->kirbytext() ?>
			<?php $count = 1 ?>
			<ul class="flexblock features">
				<?php foreach ($page->effects()->toStructure() as $p) : ?>
					<li>
				        <div>
				          <h2><?= $count.' - '.$p ->title() ?></h2>
				          <hr>
				          <?= $p->description()->kirbytext() ?>
						  <p class="subtle">Famille : <?= $p->family() ?></p>
				          <?php $count++ ?>
				        </div>
				      </li>
				<?php endforeach ?>
			</ul>
		</div>
	</section>
</article>

<?php snippet('footer') ?>