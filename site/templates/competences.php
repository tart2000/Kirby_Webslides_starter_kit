<?php snippet('header') ?>

<article>
	<section>
		<div class="wrap effects">
			<h2><?= $page->title() ?></h2>
			<?= $page->text()->kirbytext() ?>
			
			<?php foreach (page('domaines')->children() as $d) : ?>
				<div id="<?= $d->uid() ?>" class="toggle"><?= $d->title() ?></div>
			<?php endforeach ?>
			<div id="show-all" class="toggle">Voir tout</div>

			<!-- Séparer les techniques métiers et capacités -->

			<ul class="flexblock features">
				<?php foreach ($page->children() as $p) : ?>
					<?php $domaines = $p->domaine()->split() ?>
					<li class="competence <?php foreach ($domaines as $dom) { 
						echo $dom.' ';
					} ?>">
				        <div>
				          <h2><?= $p ->title() ?></h2>
				          <hr>
				          <?= $p->text()->kirbytext() ?>
						  <p class="subtle">Catégorie : <?= $p->categories() ?></p> 
				        </div>
				      </li>
				<?php endforeach ?>
			</ul>
		</div>
	</section>
</article>

<?php snippet('footer') ?>