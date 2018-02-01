
<section class="bg-light">
  <div class="wrap">
    <h2><?= $s->title() ?></h2>
    <?= $s->text()->kirbytext() ?>
    <?php $step = 1 ?>
    <ul class="flexblock steps fadeInUp">
    	<?php foreach ($s->steps()->toStructure() as $item) : ?>
	      <li>
	      	<?php if ($step > 1) : ?>
		      	<div class="process step-<?= $step ?>"></div>
		    <?php endif ?>
			<?php if ($item->icon() != '') : ?>
                <span>
                	<i class="fa fa-<?= $item->icon() ?>"></i>
                </span>
              <?php elseif ($item->img() != '') : ?>
                <?php $img = $item->img()->toFile() ?>
                  <?= $img ?>
              <?php endif ?>
	        <h2><?= $item->title() ?></h2>
	        <?= $item->text()->kirbytext() ?>
	      </li>
	      <?php $step++ ?>
	  	<?php endforeach ?>
    </ul>
  </div>
  <!-- .end .wrap -->
</section>


