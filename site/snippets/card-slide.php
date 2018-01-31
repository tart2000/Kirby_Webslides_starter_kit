<?php $image = makeImage($s) ?>

<section class="fullscreen">
    <div class="card-50">
      <figure>
        <img src="<?= $image ?>" alt="">
        <?php if ($s->figcaption() != '') : ?>
          <figcaption>
            <a href="https://unsplash.com/@dburka" title="Daniel Burka">
              <svg class="fa-camera">
                <use xlink:href="#fa-camera"></use>
              </svg>
              Daniel Burka (Unsplash)
            </a>
          </figcaption>
      <?php endif ?>
      </figure>
      <!-- end figure-->
      <div class="flex-content">
        <h2><?= $s->title() ?></h2>
        <?= $s->description()->kirbytext() ?>
      </div>
      <!-- end .flex-content-->
    </div>
    <!-- end .card-50-->
</section>
