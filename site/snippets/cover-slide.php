<?php $image = makeImage($s) ?>

<section class="bg-gradient-v">
  <span class="background dark" style="background-image:url('<?= $image ?>')"></span>
  <div class="wrap size-60">
    <h1 class="text-landing"><?= $s->title() ?></h1>
    <?= $s->description()->kirbytext() ?>
  </div>
  <!-- .end .wrap -->
</section>