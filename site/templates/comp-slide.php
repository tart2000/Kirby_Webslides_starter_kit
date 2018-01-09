<?php snippet('header') ?>

<article id="webslides">
	<?php foreach ($page->parent()->children()->filterBy('template','competence') as $c) : ?>
		<section>
			<div class="wrap size-80 comp">
	        	<div class="card-header <?= $c->family() ?>">
	        		<?php if ($c->family() == "energie") {
	        			echo '<i class="fa fa-flash"></i> '.' Transition énergétique';
	        		} else if ($c->family() == "innovation") {
	        			echo '<i class="fa fa-lightbulb-o"></i> '.' Accélération de l\'innovation technologique';
	        		} else if ($c->family() == "socio") {
	        			echo '<i class="fa fa-line-chart"></i> '.' Transitions socio-économiques';
	        		} ?>
	        	</div>
				<h3><!-- <?= $c->num() ?> - -->
					<?= $c->title() ?></h3>
				<?= $c->description()->kirbytext() ?>

				<?php if ($c->categories() == 'capacite') : ?>
					<a href="<?= $site->url().'/competences/categories:capacite#filter' ?>" class="toggle cat">
		          		Capacités d'évolution et d'interaction
		          	</a>
	          	<?php elseif ($c->categories() == 'metier') : ?>
	          		<a href="<?= $site->url().'/competences/categories:metier#filter' ?>" class="toggle cat">
	          			Technique Métier	
	          		</a>
	          	<?php endif ?>

				<?php if ($c->domaine() != '') : ?>
					<?php $domaines = $c->domaine()->split() ?>
					<?php foreach ($domaines as $d): ?>
						<?php $domaine = page('domaines')->children()->find($d) ?>
						<a href="<?= $site->url().'/competences/domaine:'.$domaine->uid().'#filter' ?>" class="toggle">
							<?php echo $domaine->title() ?>
						</a>
					<?php endforeach ?>
				<?php endif ?>
				
				<?php if ($c->categories() == "socle-commun") : ?>
					<a href="<?= $site->url().'/competences/categories:socle-commun#filter' ?>" class="toggle cat">
						Socle commun
					</a>
				<?php endif ?>

			</div>
		</section>
	<?php endforeach ?>
</article>

<?php snippet('footer') ?>