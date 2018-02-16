<?php snippet('header') ?>

<article>
	<section>
		<div class="wrap competences">
			<h2><?= $page->title() ?></h2>
			<?= $page->text()->kirbytext() ?>

			<hr>

			<?php $selection = $page->children()->visible() ?>

			<?php 
				if ($domaine = param('domaine')) {
					$selection = $selection->filterBy('domaine', $domaine, ',');
				} elseif ($categories = param('categories')) {
					$selection = $selection->filterBy('categories', $categories, ',');
				} elseif ($family = param('family')) {
					$selection = $selection->filterBy('family', $family, ',');
				} elseif ($star = param('star')) {
					$selection = $selection->filterBy('star', '==', '1');
				}
			?>
			
			<div id="filter">
				<b><i class="fa fa-filter"></i> Filtrer :</b>

				<!-- Familles -->
				<?php if (param('family') == '') : ?>
					<div class="dropdown">
					  <button onclick="myFunction()" class="dropbtn">
					  	Enjeux d'avenir
					  	<i class="fa fa-caret-down"></i>
					  </button>
					  <div id="myDropdown" class="dropdown-content">
					    <a href="<?= $page->url().'/family:energie#filter' ?>">
					    	<i class="fa fa-flash"></i> Transition énergétique
					    </a>
					    <a href="<?= $page->url().'/family:innovation#filter' ?>">
					    	<i class="fa fa-lightbulb-o"></i> Accélération de l'innovation technologique
					    </a>
					    <a href="<?= $page->url().'/family:socio#filter' ?>">
					    	<i class="fa fa-line-chart"></i> Transformations socio-économiques
					    </a>
					  </div>
					</div>
				<?php else : ?>
					<button class="somebtn">
						<?php if ($family == 'energie') : ?>
							<i class="fa fa-flash"></i> Transition énergétique
						<?php elseif ($family == 'innovation') : ?>
							<i class="fa fa-lightbulb-o"></i> Accélération de l'innovation technologique
						<?php else : ?>
							<i class="fa fa-line-chart"></i> Transformations socio-économiques
						<?php endif ?>
					</button>
				<?php endif ?>

				<!-- Domaines -->
				<?php if (param('domaine') == '') : ?>
					<div class="dropdown">
					  <button onclick="myFunction2()" class="dropbtn seabrook">
					  	Domaines professionnels
					  	<i class="fa fa-caret-down"></i>
					  </button>
					  <div id="myDropdown2" class="dropdown-content">
					  	<?php foreach (page('domaines')->children() as $d) : ?>
							<a href="<?= $page->url().'/domaine:'.$d->uid().'#filter' ?>" id="<?= $d->uid() ?>">
								<?= $d->title() ?>
							</a>
						<?php endforeach ?>
					  </div>
					</div>
				<?php else : ?>
					<button class="somebtn seabrook selected">
						<?php $thedomaine = page('domaines')->find($domaine) ?>
						<?= $thedomaine->title() ?>
					</button>
				<?php endif ?>

				<!-- Categories -->
				<?php if (param('categories') == '') : ?>
					<div class="dropdown">
					  <button onclick="myFunction3()" class="dropbtn mazarine">
					  	Catégories de compétences
					  	<i class="fa fa-caret-down"></i>
					  </button>
					  <div id="myDropdown3" class="dropdown-content">
					  	<a href="<?= $page->url().'/categories:metier#filter' ?>">
					    	Techniques métiers
					    </a>
					    <a href="<?= $page->url().'/categories:capacite#filter' ?>">
					    	Capacités d'évolution
					    </a>
					    <a href="<?= $page->url().'/categories:socle-commun#filter' ?>">
					    	Socle commun
					    </a>
					  </div>
					</div>
				<?php else : ?>
					<button class="somebtn mazarine selected">
						<?php if ($categories == 'metier') : ?>
							Techniques métiers
						<?php elseif ($categories == 'capacite') : ?>
							Capacités d'évolution
						<?php else : ?>
							Socle commun
						<?php endif ?>
					</button>
				<?php endif ?>

				<!-- Les étoiles -->
				<a href="<?= $page->url().'/star:cles#filter' ?>">
					<button class="dropbtn bluenights <?php e($star == 'cles', 'selected') ?>">
						<i class="fa fa-star"></i> 8 Compétences-clés
					</button>
				</a>

				<?php if (param('domaine') != '' || param('categories') != '' || param('family') != '' || param('star') != '') : ?>
					<a href="<?= $page->url().'#filter' ?>">
						<button  id="show-all" class="dropbtn vanadyl">Voir tout</button>
					</a>
				<?php endif ?>

			</div>
			
			<?php if (param('star') != '') : ?>
				<div id="comp-title">
					<h4>Compétences-clés retenues par la Branche comme priorités de formation</h4>
				</div>
			<?php endif ?>

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
					        			echo '<i class="fa fa-line-chart"></i> '.' Transformations socio-économiques';
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