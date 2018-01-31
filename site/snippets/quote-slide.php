<section class="bg-primary">
  <!--.wrap = container 1200px -->
  <div class="wrap size-80">
    <div class="aligncenter">
      <?= $s->description()->kirbytext() ?>
    </div>
    <hr>
    <blockquote class="wall">
      <?= $s->quote()->kirbytext() ?>
      <p><cite>
        <?php if ($s->link() != '') : ?>
          <a href="<?= $s->link() ?>" target="_blank">
        <?php endif ?>
        <?= $s->who() ?>
        <?php if ($s->link() != '') : ?>
          </a>
        <?php endif ?>
      </cite></p>
    </blockquote>
  </div>
  <!-- .end .wrap -->
</section>