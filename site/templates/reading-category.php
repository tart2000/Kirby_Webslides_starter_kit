<?php snippet('header') ?>

<article>
	<section>
		<div class="wrap covers">
			<h2><?= $page->title() ?></h2>
			<?= $page->text()->kirbytext() ?>

			<ul class="flexblock features">
				<?php foreach ($page->children() as $e) : ?>
					<li>
						<a href="<?= $e->url() ?>">
								<?php if ($e->hasImages()) : ?>
									<img src="<?= $e->images()->first()->url() ?>">
								<?php endif ?>
							<div class="meta-etude">
			              		<h2><?= $e->title() ?></h2>
			              		<p><?= $e->qui() ?></p>
			              		<em class="mytag"><?= $e->tags() ?></em>
			              		<em class="mytag"><?= $e->horizon() ?></em>
			              	</div>
						</a>
					</li>
				<?php endforeach ?>
			</ul>

		</div>
	</section>
</article>

<?php snippet('footer') ?>