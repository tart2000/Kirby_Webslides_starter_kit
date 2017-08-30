<?php snippet('header') ?>

<article>
	<section>
		<div class="wrap covers">
			<h2><?= $page->title() ?></h2>
			<?= $page->text()->kirbytext() ?>

			<h3>Études issues de la filière</h3>

			<ul class="flexblock features">
				<?php foreach ($page->children() as $e) : ?>
					<li>
						<a href="<?= $e->url() ?>">
			              <h2><?= $e->title() ?></h2>
			              <p><?= $e->qui() ?></p>
						</a>
					</li>
				<?php endforeach ?>
			</ul>

			<h3>Études énergie « institutionnelles »</h3>

			<ul class="flexblock gallery">
				<?php foreach ($page->reads2()->toStructure() as $p) : ?>
					<li>
						<a href="<?= $p->theurl() ?>" target="_blank">
							<figure>
					            <img alt="Thumbnail" src="<?= $page->image($p->img())->url() ?>">
					            <figcaption>
					              <h2><?= $p->title() ?></h2>
					              <p><?= $p->comms() ?></p>
					            </figcaption>
					          </figure>
						</a>
					</li>
				<?php endforeach ?>
			</ul>

			<h3>Études énergies issues d’autres sources</h3>

			<ul class="flexblock gallery">
				<?php foreach ($page->reads3()->toStructure() as $p) : ?>
					<li>
						<a href="<?= $p->theurl() ?>" target="_blank">
							<figure>
					            <img alt="Thumbnail" src="<?= $page->image($p->img())->url() ?>">
					            <figcaption>
					              <h2><?= $p->title() ?></h2>
					              <p><?= $p->comms() ?></p>
					            </figcaption>
					          </figure>
						</a>
					</li>
				<?php endforeach ?>
			</ul>

			<h3>Études sur d’autres thématiques que l’énergie</h3>

			<ul class="flexblock gallery">
				<?php foreach ($page->reads4()->toStructure() as $p) : ?>
					<li>
						<a href="<?= $p->theurl() ?>" target="_blank">
							<figure>
					            <img alt="Thumbnail" src="<?= $page->image($p->img())->url() ?>">
					            <figcaption>
					              <h2><?= $p->title() ?></h2>
					              <p><?= $p->comms() ?></p>
					            </figcaption>
					          </figure>
						</a>
					</li>
				<?php endforeach ?>
			</ul>			

		</div>
	</section>
</article>

<?php snippet('footer') ?>