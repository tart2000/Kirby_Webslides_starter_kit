<?php snippet('header') ?>

<article>
	<section>
		<div class="wrap">
			<h2><?= $page->title() ?></h2>
			<?= $page->text()->kirbytext() ?>
			<ul class="flexblock activity">
				<?php foreach ($page->reads()->toStructure() as $p) : ?>
					<li>
						<a href="<?= $p->theurl() ?>" target="_blank">
							<div>
								<p class="title">
									<?= $p->title() ?>
								</p>
								<p class="year">
									<?= $p->comms() ?>
								</p>
								<p class="summary">
									<?= $p->description() ?>
								</p>
							</div>
						</a>
					</li>
				<?php endforeach ?>
			</ul>
		</div>
	</section>
</article>

<?php snippet('footer') ?>