<?php snippet('header') ?>

<article>
	<section class="bg-black aligncenter">
	  <span class="background light" style="background-image:url('https://source.unsplash.com/yETqkLnhsUI')"></span>
	  <div class="wrap size-60">
	    <h1><?= $site->title() ?></h1>
	    <?= $site->baseline()->kirbytext() ?>
	  </div>
	  <!-- .end .wrap -->
	</section>

	<section>
		<div class="wrap">
			<img class="alignright size-30" src="<?= $site->url() ?>/assets/images/pyramid1.png" alt="iPhone">
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
	        <p>
	          <button type="submit" tabindex="3" title="email">Laisser mon email &rsaquo;</button>
	        </p>
	      </fieldset>
	    </form>
	  </div>
	  <!-- .end .wrap -->
	</section>

	<section>
		<div class="wrap size-50">
			<h2>Productions</h2>
			<ul class="description">
				<?php foreach ($site->pages()->visible() as $s) : ?>
					<li>
						<a href="<?php echo $s->url() ?>" >
							<span><?php echo $s->title() ?></span>
						</a>
					</li>
				<?php endforeach ?>
			</ul>
		</div>
	</section>
</article>

<?php snippet('footer') ?>