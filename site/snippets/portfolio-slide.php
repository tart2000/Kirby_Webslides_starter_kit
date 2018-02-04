<section class="aligncenter">
    <div class="wrap fadeInUp">

      <h2><?= $s->title() ?></h2>

      <?= $s->description()->kirbytext() ?>

      <?php if ($s->items() != '') : ?>
        <ul class="flexblock gallery">
          <?php foreach($s->items()->toStructure() as $item): ?>
            <li>
              <a href="<?= $item->theurl() ?>">
                <figure>
                  <img src="<?= $s->image($item->img())->url() ?>">
                  <figcaption>
                    <h2><?= $item->title() ?></h2>
                  </figcaption>
                </figure>
              </a>
            </li>
          <?php endforeach ?>
        </ul>
      <?php endif ?>

    </div>
    <!-- .end .wrap -->
  </section>