  <?php if ($e->isVisible()) : ?>
  <li>
      <a href="<?= $e->url() ?>">
        <h3>
        	<span>
        		<?php if($e->past() != '1'): ?>
  	      		<img src="<?= $site->url().'/assets/images/event-star.png' ?>">
  	      	<?php else : ?> 
  	      		<img src="<?= $site->url().'/assets/images/event-tick.png' ?>">
  	      	<?php endif ?>
        	</span>
          <?= $e->title() ?>  
        </h3>
        <p class="date"><?= strftime("%A %d %B %Y", strtotime($e->date('l j F Y'))) ?></p>
      </a>
  </li>
<?php endif ?>