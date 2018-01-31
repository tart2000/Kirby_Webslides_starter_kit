<section>
  <div class="wrap size-80">
    <h2><?= $s->title() ?></h2>
    <hr>
    <?= $s->description()->kirbytext() ?>

    <!-- Columns si nécessaire -->
  	<?php if ($s->columns() != '') : ?>
  	<div class="grid sss">
	  	<?php foreach ($s->columns()->toStructure() as $c) : ?>
	  		<div class="column">
	  			<?= $c->text()->kirbytext() ?>
	  		</div>
	  	<?php endforeach ?>
	</div>
	<?php endif ?>
  </div>
  <!-- .end .wrap -->
</section>