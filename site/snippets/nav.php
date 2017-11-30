

<?php if ($page->depth() > 1) : ?>

	<a href="<?= $page->parent()->url() ?>" class="burger">
	  <svg class="fa-arrow-left">
	    <use xlink:href="#fa-arrow-left"></use>
	  </svg>
	</a>

<?php else : ?>

	<a href="<?= $site->url() ?>" class="burger">
	  <svg class="fa-home">
	    <use xlink:href="#fa-home"></use>
	  </svg>
	</a>

<?php endif ?>