<span class="burger">

<?php if ($page->depth() > 1) : ?>

	<a href="<?= $page->parent()->url() ?>">
		<i class="fa fa-arrow-left"></i>
	</a>

<?php else : ?>

	<a href="<?= $site->url() ?>" class="burger">
		<i class="fa fa-home"></i>
	</a>

<?php endif ?>

<a href="#" class="burger2"><i class="fa fa-align-left"></i></a>

<ul class="menu">
	<li>
		<a href="<?= $site->url() ?>/projets">
			<h2 class="features">Les 8 projets de formation</h2>
		</a>
	</li>
	<li>
		<a href="<?= $site->url() ?>/competences">
			<h2 class="features">Les 28 compétences d'avenir</h2>
		</a>
	</li>
	<li>
		<a href="<?= $site->url() ?>/#steps">
			<h2 class="features">La démarche en un coup d'oeil</h2>
		</a>
	</li>
</ul>

</span>