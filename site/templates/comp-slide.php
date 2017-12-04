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
				<h3><?= $c->num() ?> - <?= $c->title() ?></h3>
				<?= $c->description()->kirbytext() ?>

				<?php if ($c->categories() == 'capacite') : ?>
					<div class="toggle cat">
		          		Capacités d'évolution et d'interaction
		          	</div>
	          	<?php elseif ($c->categories() == 'metier') : ?>
	          		<div class="toggle cat">
	          			Technique Métier	
	          		</div>
	          	<?php endif ?>

				<?php if ($c->domaine() != '') : ?>
					<?php $domaines = $c->domaine()->split() ?>
					<?php foreach ($domaines as $d): ?>
						<div class="toggle">
							<?php echo page('domaines')->children()->find($d)->title() ?>
						</div>
					<?php endforeach ?>
				<?php endif ?>
				<?php if ($c->categories() == "socle-commun") : ?>
					<div class="toggle cat">
						Socle commun
					</div>
				<?php endif ?>

			</div>
		</section>
	<?php endforeach ?>
</article>

<?php snippet('footer') ?>