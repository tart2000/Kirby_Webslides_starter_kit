<?php snippet('header') ?>

<?php date_default_timezone_set('UTC'); ?>
<?php setlocale(LC_TIME, "fr_FR", ""); ?>

<article>
	<?php if ($page->unsplash() != '') : ?>
		<section class="bg-black aligncenter">
		  <span class="background" style="background-image:url('https://source.unsplash.com/<?= $page->unsplash() ?>')"></span>
		  <div class="wrap">
		    <h1 class="text-landing text-shadow"><strong><?= $page->title() ?></strong></h1>
		    <p class="text-shadow bigger-p">
		      	<?php if ($page->date() != ''): ?>
					<svg class="fa-calendar">
			          <use xlink:href="#fa-calendar"></use>
			        </svg>
			        <?= strftime("%A %d %B %Y", strtotime($page->date('l j F Y'))) ?>
				<?php endif ?>
			</p>
			<p class="text-shadow bigger-p">
				<?php if ($page->location() != '' ) : ?>
					<svg class="fa-map-pin">
			          <use xlink:href="#fa-map-pin"></use>
			        </svg>
			        <?= $page->location() ?>
				<?php endif ?>
		    </p>
		  </div>
		</section>
	<?php endif ?>

	<section>
		<div class="wrap size-50">
			<?php if ($page->unsplash() == '') : ?>
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
			<?php endif ?>

			<?= $page->text()->kirbytext() ?>
		</div>
	</section>
</article>

<?php snippet('footer') ?>