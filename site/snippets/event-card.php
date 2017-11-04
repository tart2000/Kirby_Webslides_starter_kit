<li>
    <a href="<?= $e->url() ?>">
      <h3>
        <svg class="fa-calendar">
          <use xlink:href="#fa-calendar"></use>
        </svg>
        <?= $e->title() ?>  
      </h3>
      <p class="date"><?= strftime("%A %d %B %Y", strtotime($e->date('l j F Y'))) ?></p>
    </a>
</li>