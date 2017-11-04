<?php snippet('header') ?>

<article>
	<section class="bg-black aligncenter">
	  <span class="background light" style="background-image:url('https://source.unsplash.com/<?= $page->img() ?>')"></span>
	  	<!-- qQwxU7NJWTI ville nuit lumières -->
		<!-- previous yETqkLnhsUI pylones sur fond campagne -->

	  <div class="hp wrap size-50">	    
	    <img src="<?= $site->url() ?>/assets/images/logo_fab_s.png" alt="<?= $site->title() ?>">
	    <?= $site->baseline()->kirbytext() ?>
	    <img id="logo_ieg" src="<?= $site->url() ?>/assets/images/logo_ieg.png">
	  </div>
	  <!-- .end .wrap -->
	</section>

	<section>
		<div class="wrap">
			<img class="alignright size-30" src="<?= $site->url() ?>/assets/images/atelier.jpg" alt="atelier">
			<?= $site->description()->kirbytext() ?>
			<a class="button" href="/edito">Édito</a>
		</div>
		<!-- Mettre une illustration ici -->
	</section>

	<?php foreach ($page->children() as $s) : ?>
		<?php if ($s->template() == 'cover-slide') : ?>
	      <?php snippet('cover-slide',array('s' => $s)) ?>

	    <?php elseif ($s->template() == 'default-slide') : ?>
	      <?php snippet('default-slide', array('s' => $s)) ?>

	    <?php elseif ($s->template() == 'card-slide') : ?>
	      <?php snippet('card-slide', array('s' => $s)) ?>      

	    <?php elseif ($s->template() == 'portfolio-slide') : ?> 
	      <?php snippet('portfolio-slide', array('s' => $s)) ?>

	    <?php elseif ($s->template() == 'icons-slide') : ?> 
	      <?php snippet('icons-slide', array('s' => $s)) ?>

	    <?php endif ?>
	<?php endforeach ?>

	<section><!-- événements -->
		<?php $events = page('events')->children() ?>
		<div class="wrap size-50">
			<h2>À venir</h2>
			<ul class="flexblock features">
				<?php foreach ($events as $e) : ?>
					<?php if($e->past() != '1'): ?>
						<?php snippet('event-card', array('e' => $e)) ?>
					<?php endif ?>
				<?php endforeach ?>
			</ul>
			<hr>
			<h2>Événements passés</h2>
			<ul class="flexblock features">
				<?php foreach ($events as $e) : ?>
					<?php if($e->past() == '1'): ?>
						<?php snippet('event-card', array('e' => $e)) ?>
					<?php endif ?>
				<?php endforeach ?>
			</ul>
		</div>
	</section>

	<section class="bg-primary">
	  <span class="background dark" style="background-image:url('https://source.unsplash.com/RkBTPqPEGDo/')"></span>
	  <!--.wrap = container 1200px -->
	  <div class="wrap size-30">
	    <form>
	      <fieldset>
	        <legend>La Fabrique d'Énergies</legend>
	        <p>
	        	Le projet ne peut se faire sans vous !<br>
	        	Pour être tenu au courant des évolutions, des futurs événements et contribuer, merci d'utiliser le formulaire ci-dessous.
	        </p>
	        <p class="aligncenter">
	          <a href="<?= $page->elink() ?>" class="button" target="_blank">Laisser mon email &rsaquo;</a>
	        </p>
	      </fieldset>
	    </form>
	  </div>
	  <!-- .end .wrap -->
	</section>
	
</article>

<?php snippet('footer') ?>