<section>
  <!--.wrap = container 1200px -->
  <div class="wrap">
    
    <?= $s->description()->kirbytext() ?>

    <?php if ($s->items() != '') : ?>
      <ul class="flexblock features">
        <?php foreach ($s->items()->toStructure() as $item) : ?>
          <li>
            <a href="<?= $item->theurl() ?>">
              <h2>
                <svg class="fa-<?= $item->icon() ?>">
                  <use xlink:href="#fa-<?= $item->icon() ?>"></use>
                </svg>
              </h2>
            <div class="icon-text">
              <h2>
                <?= $item->title() ?>
              </h2>
              <?= $item->text() ?>
            </div>
            </a>
          </li>
        <?php endforeach ?>
      </ul>
    <?php endif ?>
  </div>
  <!-- .end .wrap -->
</section>
