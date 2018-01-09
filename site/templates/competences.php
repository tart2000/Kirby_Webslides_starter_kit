<?php snippet('header') ?>

<article>
	<section>
		<div class="wrap competences">
			<h2><?= $page->title() ?></h2>
			<?= $page->text()->kirbytext() ?>

			<hr>

			<?php $selection = $page->children()->filterBy('template','competence')->sortBy('family') ?>

			<?php 
				if ($domaine = param('domaine')) {
					$selection = $selection->filterBy('domaine', $domaine, ',');
				} elseif ($categories = param('categories')) {
					$selection = $selection->filterBy('categories', $categories, ',');
				} elseif ($family = param('family')) {
					$selection = $selection->filterBy('family', $family, ',');
				}
			?>
			
			<div id="filter">
				<b><i class="fa fa-filter"></i> Filtrer :</b>

				<!-- Categories -->
				<a href="<?= $page->url().'/categories:metier#filter' ?>" class="toggle cat <?php e($categories == 'metier','selected') ?>">
					Techniques métiers
				</a>
				<a href="<?= $page->url().'/categories:capacite#filter' ?>" class="toggle cat <?php e($categories == 'capacite','selected') ?>">
					Capacités d'évolution
				</a>
				<a href="<?= $page->url().'/categories:socle-commun#filter' ?>" class="toggle cat <?php e($categories == 'socle-commun','selected') ?>">
					Socle commun
				</a>
				
				<!-- Domaines -->
				<?php foreach (page('domaines')->children() as $d) : ?>
					<a href="<?= $page->url().'/domaine:'.$d->uid().'#filter' ?>" id="<?= $d->uid() ?>" class="toggle <?php e($domaine == $d->uid(),'selected') ?>">
						<?= $d->title() ?>
					</a>
				<?php endforeach ?>

				<!-- Familles -->
				<a href="<?= $page->url().'/family:energie#filter' ?>" class="toggle fam <?php e($family == 'energie','selected') ?>">
					<i class="fa fa-flash"></i> Transition énergétique
				</a>
				<a href="<?= $page->url().'/family:innovation#filter' ?>" class="toggle fam <?php e($family == 'innovation','selected') ?>">
					<i class="fa fa-lightbulb-o"></i> Accélération de l'innovation technologique
				</a>
				<a href="<?= $page->url().'/family:socio#filter' ?>" class="toggle fam <?php e($family == 'socio','selected') ?>">
					<i class="fa fa-line-chart"></i> Transitions socio-économiques
				</a>


				<!-- Viré les étoiles 
				<div id="star" class="toggle">Compétences clés</div>
				-->

				<?php if (param('domaine') != '' || param('categories') != '' || param('family') != '') : ?>
					<a href="<?= $page->url().'#filter' ?>" id="show-all" class="toggle">Voir tout</a>
				<?php endif ?>

			</div>
			<!-- Ajouter couleurs sur cartes + icones familles -->

			<ul class="flexblock features">
				<?php foreach ($selection as $p) : ?>
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
						        	<!-- <?= $p->num() ?> - numéro enlevé temporairement --> 
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
						          	Capacités d'évolution et d'interaction | <i class="fa fa-th-list"></i> <?= $count ?> domaine<?php e($count>1,'s') ?>
						          <?php elseif ($p->categories() == 'metier') : ?>
						          	Technique Métier | <i class="fa fa-th-list"></i> <?= $count ?> Domaine<?php e($count>1,'s') ?>
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