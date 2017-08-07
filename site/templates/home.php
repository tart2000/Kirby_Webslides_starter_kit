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
		</div>
	</section>
</article>

<?php snippet('footer') ?>