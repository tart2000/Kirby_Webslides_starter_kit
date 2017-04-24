<?php snippet('header') ?>

<article>
	<section>
		<?php foreach ($site->pages()->filterBy('template','==','slideshow') as $s) : ?>
			<a href="<?php echo $s->url() ?>" >
				<h1><?php echo $s->title() ?></h1>
			</a>
		<?php endforeach ?>
	</section>
</article>

<?php snippet('footer') ?>