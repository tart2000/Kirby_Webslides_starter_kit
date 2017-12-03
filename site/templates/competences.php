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
			<!-- Viré les étoiles 
			<div id="star" class="toggle">Compétences clés</div>
			-->
			<div id="show-all" class="toggle">Voir tout</div>

			<!-- Ajouter couleurs sur cartes + icones familles -->

			<ul class="flexblock features">
				<?php foreach ($page->children()->filterBy('template','competence')->sortBy('family') as $p) : ?>
					<?php $domaines = $p->domaine()->split() ?>
					
					<li class="competence <?php foreach ($domaines as $dom) { 
						echo $dom.' ';
					} ?> <?php if ($p->star() == '1') {
						echo 'star';
					} ?> <?= $p->categories() ?> <?= $p->family() ?>
					">
						<a href="/competences/competences#slide=<?= $p->num() ?>">
					        <div>
					        	<div class="card-header <?= $p->family() ?>">
					        		<?php if ($p->family() == "energie") {
					        			echo '<i class="fa fa-flash"></i> '.' Transition énergétique';
					        		} else if ($p->family() == "innovation") {
					        			echo '<i class="fa fa-lightbulb-o"></i> '.' Accélération de l\'innovation technologique';
					        		} else if ($p->family() == "socio") {
					        			echo '<i class="fa fa-line-chart"></i> '.' Transitions socio-économiques';
					        		} ?>
					        	</div>
						        <h3>
						        	<?= $p->num() ?> - 
						          	<?php if ($p->star() == '1') : ?>
						          		<i class="fa fa-star"></i>
						          	<?php endif ?>
						          	<?= $p ->title() ?>		
						        </h3>

					          <?php $count = 0 ?>
							  <?php foreach ($domaines as $dom) : ?>
							  	<?php $count++ ?>
							  <?php endforeach ?>

							  <div class="tag">
						          <?php if ($p->categories() == 'capacite') : ?>
						          	Capacités d'évolution et d'interaction | <i class="fa fa-th-list"></i> <?= $count ?> domaines
						          <?php elseif ($p->categories() == 'metier') : ?>
						          	Technique Métier | <i class="fa fa-th-list"></i> <?= $count ?> Domaines
						          <?php else : ?>
						          	Socle commun
						          <?php endif ?>
						      </div>

					        </div>
				        </a>
				      </li>
				<?php endforeach ?>
			</ul>
		</div>
	</section>
</article>

<?php snippet('footer') ?>