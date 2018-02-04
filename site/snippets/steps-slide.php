
<section>
  <div class="wrap fadeInUp">
    <h2><?= $s->title() ?></h2>
    <?= $s->text()->kirbytext() ?>
    <?php $step = 1 ?>
    <ul class="flexblock steps">
    	<?php foreach ($s->steps()->toStructure() as $e) : ?>
	      <li>
	      	<?php if ($step > 1) : ?>
		      	<div class="process step-<?= $step ?>"></div>
		    <?php endif ?>
	      	<?php if ($e->icon() != '') : ?>
		        <span>
		          <svg class="fa-<?= $e->icon() ?>">
		            <use xlink:href="#fa-<?= $e->icon() ?>"></use>
		          </svg>
		        </span>
		    <?php endif ?>
	        <h2><?= $e->title() ?></h2>
	        <?= $e->text()->kirbytext() ?>
	      </li>
	      <?php $step++ ?>
	  	<?php endforeach ?>
    </ul>
  </div>
  <!-- .end .wrap -->
</section>


