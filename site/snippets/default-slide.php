<section>
  <div class="wrap size-80">
<<<<<<< HEAD
  	<?php if ($s->meta() != '') : ?>
  		<p class="text-context"><?= $s->meta() ?></p>
	<?php endif ?>
=======
    <?php if ($s->meta() != '') : ?>
        <p class="text-context"><?= $s->meta() ?></p>
    <?php endif ?>
>>>>>>> master
    <h2><?= $s->title() ?></h2>
    <hr>
    <?= $s->description()->kirbytext() ?>
  </div>
  <!-- .end .wrap -->
</section>