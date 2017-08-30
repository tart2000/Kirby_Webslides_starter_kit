<?php snippet('header') ?>

<article>
	<section class="bg-black aligncenter">
	  <span class="background light" style="background-image:url('https://source.unsplash.com/qQwxU7NJWTI')"></span>
		<!-- previous yETqkLnhsUI pylones sur fond campagne -->

	  <div class="hp wrap size-60">
	    <h1><?= $site->title() ?></h1>
	    <?= $site->baseline()->kirbytext() ?>
	    [logo]
	  </div>
	  <!-- .end .wrap -->
	</section>

	<section>
		<div class="wrap">
			<img class="alignright size-30" src="<?= $site->url() ?>/assets/images/cube.png" alt="iPhone">
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