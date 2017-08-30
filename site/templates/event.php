<?php snippet('header') ?>

<?php date_default_timezone_set('UTC'); ?>
<?php setlocale(LC_TIME, "fr_FR", "fra"); ?>

<article>
	<section>
		<div class="wrap size-50">
			<h2><?= $page->title() ?></h2>
			<?php echo strtotime($page->date()) ?>
			<p class="subtle"><?= strftime("%A le %d %B, %Y", strtotime($page->date())) ?></p>
			<?= $page->text()->kirbytext() ?>
		</div>
	</section>
</article>

<?php snippet('footer') ?>