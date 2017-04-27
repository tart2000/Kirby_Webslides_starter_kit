

<section class="bg-gradient-v">
  <span class="background dark" style="background-image:url('https://source.unsplash.com/<?= $s->img() ?>/1440x1440')"></span>
  <div class="wrap size-60">
  	<?php if ($s->meta() != '') : ?>
  		<p class="text-context"><?= $s->meta() ?></p>
	   <?php endif ?>
    <h2><?= $s->title() ?></h2>
    <?= $s->description()->kirbytext() ?>
  </div>
  <!-- .end .wrap -->
</section>