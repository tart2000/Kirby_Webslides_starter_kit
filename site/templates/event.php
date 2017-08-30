<?php snippet('header') ?>

<?php date_default_timezone_set('UTC'); ?>
<?php setlocale(LC_TIME, "fr_FR", ""); ?>

<article>
	<section>
		<div class="wrap size-50">
			<h2><?= $page->title() ?></h2>
			<p class="date"><?= strftime("%A %d %B %Y", strtotime($page->date('l j F Y'))) ?></p>
			<?= $page->text()->kirbytext() ?>
		</div>
	</section>
</article>

<?php snippet('footer') ?>