<?php
// Définit le fuseau horaire par défaut à utiliser. Disponible depuis PHP 5.1
date_default_timezone_set('UTC'); ?>

<section class="bg-gradient-v">
  <span class="background dark" style="background-image:url('https://source.unsplash.com/<?= $s->img() ?>/1440x1440')"></span>
  <div class="wrap size-60">
    <p class="text-context"><?php echo date('d/m/Y') ?></p>
    <h2><?= $s->title() ?></h2>
    <?= $s->description()->kirbytext() ?>
  </div>
  <!-- .end .wrap -->
</section>