<?php snippet('header') ?>

<?php date_default_timezone_set('UTC'); ?>
<?php setlocale(LC_TIME, "fr_FR", ""); ?>

<article>
	<section>
		<div class="wrap size-50">
			<h2><?= $page->title() ?></h2>
			<p class="date">
				<?php if ($page->date() != ''): ?>
					<svg class="fa-calendar">
			          <use xlink:href="#fa-calendar"></use>
			        </svg>
			        <?= strftime("%A %d %B %Y", strtotime($page->date('l j F Y'))) ?>
				<?php endif ?>
				<?php if ($page->location() != '' ) : ?>
					<svg class="fa-map-pin">
			          <use xlink:href="#fa-map-pin"></use>
			        </svg>
			        <?= $page->location() ?>
				<?php endif ?>
			</p>
			<?= $page->text()->kirbytext() ?>
		</div>
	</section>
</article>

<?php snippet('footer') ?>