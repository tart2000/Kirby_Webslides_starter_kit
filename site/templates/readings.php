<?php snippet('header') ?>

<article>
	<section>
		<div class="wrap covers">
			<h2><?= $page->title() ?></h2>
			<?= $page->text()->kirbytext() ?>

			<h3>Études issues de la filière</h3>

			<ul class="flexblock features">
				<?php foreach ($page->children()->filterBy('cat','filiere') as $e) : ?>
					<li>
						<a href="<?= $e->url() ?>">
								<?php if ($e->hasImages()) : ?>
									<img src="<?= $e->images()->first()->url() ?>">
								<?php endif ?>
							<div class="meta-etude">
			              		<h2><?= $e->title() ?></h2>
			              		<p><?= $e->qui() ?></p>
			              	</div>
						</a>
					</li>
				<?php endforeach ?>
			</ul>

			<h3>Études 'énergie' institutionnelles</h3>

			<ul class="flexblock features">
				<?php foreach ($page->children()->filterBy('cat','institutionnelles') as $e) : ?>
					<li>
						<a href="<?= $e->url() ?>">
							<div class="thumbss">
								<?php if ($e->hasImages()) : ?>
									<img src="<?= $e->images()->first()->url() ?>">
								<?php endif ?>
							</div>
							<div class="meta-etude">
			              		<h2><?= $e->title() ?></h2>
			              		<p><?= $e->qui() ?></p>
			              	</div>
						</a>
					</li>
				<?php endforeach ?>
			</ul>

			<h3>Études 'énergie' issues d’autres sources</h3>
			
			<ul class="flexblock features">
				<?php foreach ($page->children()->filterBy('cat','autressources') as $e) : ?>
					<li>
						<a href="<?= $e->url() ?>">
							<div class="thumbss">
								<?php if ($e->hasImages()) : ?>
									<img src="<?= $e->images()->first()->url() ?>">
								<?php endif ?>
							</div>
							<div class="meta-etude">
			              		<h2><?= $e->title() ?></h2>
			              		<p><?= $e->qui() ?></p>
			              	</div>
						</a>
					</li>
				<?php endforeach ?>
			</ul>

			<h3>Études sur d’autres thématiques que l’énergie</h3>

			<ul class="flexblock features">
				<?php foreach ($page->children()->filterBy('cat','thematiques') as $e) : ?>
					<li>
						<a href="<?= $e->url() ?>">
							<div class="thumbss">
								<?php if ($e->hasImages()) : ?>
									<img src="<?= $e->images()->first()->url() ?>">
								<?php endif ?>
							</div>
							<div class="meta-etude">
			              		<h2><?= $e->title() ?></h2>
			              		<p><?= $e->qui() ?></p>
			              	</div>
						</a>
					</li>
				<?php endforeach ?>
			</ul>			

		</div>
	</section>
</article>

<?php snippet('footer') ?>