

<?php if ($page->depth() > 1) : ?>

	<a href="<?= $page->parent()->url() ?>" class="burger">
		<i class="fa fa-arrow-left"></i>
	</a>

<?php else : ?>

	<a href="<?= $site->url() ?>" class="burger">
		<i class="fa fa-home"></i>
	</a>

<?php endif ?>