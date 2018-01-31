<?php snippet('header') ?>

<article>
	<section>
		<div class="wrap size-50">
			<h2>Productions</h2>
			<ul class="description">
				<?php foreach ($site->pages()->visible() as $s) : ?>
					<li>
						<a href="<?php echo $s->url() ?>" >
							<span><?php echo $s->title() ?></span>
						</a>
					</li>
				<?php endforeach ?>
			</ul>

		<!-- Hidden projects only for loged in users -->
			<?php if ($site->user()) : ?>
				<hr>
				<ul class="description">
					<h2>Productions cachées</h2>
					<?php foreach ($site->pages()->invisible()->filterBy('template','slideshow') as $p) : ?>
						<li>
							<a href="<?= $p->url() ?>" >
								<span><?= $p->title() ?></span>
							</a>
						</li>
					<?php endforeach ?>
				</ul>
			<?php endif ?>

		</div>
	</section>
</article>

<?php snippet('footer') ?>