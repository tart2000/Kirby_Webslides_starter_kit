<?php snippet('header') ?>

<article>
	<section>
		<div class="wrap">
			<h2><?= $page->title() ?></h2>
			<?= $page->text()->kirbytext() ?>

			<hr>

			<ul class="flexblock gallery">
				<?php foreach ($page->children() as $pro) : ?>
					<li class="project projet">
				        <a  href="<?= $pro->url() ?>">
				          <figure class="bg-white">
				          	<?php if ($pro->hasImages()) : ?>
				            	<span class="background light" style="background-image:url('<?= $pro->images()->first()->url() ?>')"></span>
				            <?php endif ?>
				            <div class="wrap aligncenter project-card">
				              	<h2 class="purple"><?= $pro->title() ?></h2>
				            </div>
				          </figure>
				        </a>
				      </li>
				<?php endforeach ?>
			</ul>
		</div>
	</section>
</article>

<?php snippet('footer') ?>