<section>
  <div class="wrap size-80">
  	<?php if ($s->meta() != '') : ?>
  		<p class="text-context"><?= $s->meta() ?></p>
	<?php endif ?>
    <h2><?= $s->title() ?></h2>
    <hr>
    <?= $s->description()->kirbytext() ?>
  </div>
  <!-- .end .wrap -->
</section>