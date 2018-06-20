<?php snippet('header') ?>

<article>
	<section>
		<div class="wrap size-50 sitemap">
			<h2><?= $page->title() ?></h2>
			<ul>
				<h3>Pages</h3>
				<?php $thepages = $site->pages()->visible()->filterBy('template','default') ?>
				<?php snippet('sitemap-min', array('thepages' => $thepages)) ?>

				<h3>Projets de formation</h3>
				<?php $thepages = $site->pages()->filterBy('template','projets') ?>
				<?php snippet('sitemap-min', array('thepages' => $thepages)) ?>

				<h3>Compétences d'avenir</h3>
				<?php $thepages = $site->pages()->filterBy('template','competences') ?>
				<?php snippet('sitemap-min', array('thepages' => $thepages)) ?>

				<h3>Etudes</h3>
				<?php $thepages = $site->pages()->filterBy('template','readings') ?>
				<?php snippet('sitemap-min', array('thepages' => $thepages)) ?>

				<h3>Evénements</h3>
				<?php $thepages = $site->pages()->filterBy('template','events') ?>
				<?php snippet('sitemap-min', array('thepages' => $thepages)) ?>
			</ul>
		</div>
	</section>
	
</article>

<?php snippet('footer') ?>