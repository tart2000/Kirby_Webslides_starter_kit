<?php snippet('header') ?>

<article>
	<section>
		<div class="wrap competences">
			<h2><?= $page->title() ?></h2>
			<?= $page->text()->kirbytext() ?>

			<hr>
			
			<b><i class="fa fa-filter"></i> Filtrer :</b>
			<?php foreach (page('domaines')->children() as $d) : ?>
				<div id="<?= $d->uid() ?>" class="toggle"><?= $d->title() ?></div>
			<?php endforeach ?>
			<div id="socle-commun" class="toggle">Socle commun</div>
			<div id="star" class="toggle">Compétences clés</div>
			<div id="show-all" class="toggle">Voir tout</div>

			<!-- Séparer les techniques métiers et capacités -->

			<ul class="flexblock features">
				<?php foreach ($page->children()->sortBy('categories') as $p) : ?>
					<?php $domaines = $p->domaine()->split() ?>
					<li class="competence <?php foreach ($domaines as $dom) { 
						echo $dom.' ';
					} ?> <?php if ($p->star() == '1') {
						echo 'star';
					} ?> <?= $p->categories() ?>
					">
				        <div>
				          <h3>
				          	<?php if ($p->star() == '1') : ?>
				          		<i class="fa fa-star"></i>
				          	<?php endif ?>
				          	<?= $p ->title() ?>		
				          </h3>

				          <?php if ($p->categories() == 'capacite') : ?>
				          	<div class="tag capacite">Capacités d'évolution et d'interaction</div>
				          <?php elseif ($p->categories() == 'metier') : ?>
				          	<div class="tag metier">Technique Métier</div>
				          <?php else : ?>
				          	<div class="tag socle">Socle commun</div>
				          <?php endif ?>

				        </div>
				      </li>
				<?php endforeach ?>
			</ul>
		</div>
	</section>
</article>

<?php snippet('footer') ?>