<?php snippet('header') ?>

<article>
	<section>
		<div class="wrap">
			<h2><?= $page->title() ?></h2>
			<?= $page->text()->kirbytext() ?>

			<hr>

			<ul class="flexblock gallery">
				<?php foreach ($page->children() as $pro) : ?>
					<li >
				        <a  href="<?= $pro->url() ?>">
				          <figure class="bg-black-blue">
				            <span class="background dark" style="background-image:url('https://source.unsplash.com/bwki71ap-y8/800x800')"></span>
				            <div class="wrap aligncenter project-card">
				              	<h2><?= $pro->title() ?></h2>
				              	<p>* * *</p>
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