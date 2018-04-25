<?php snippet('header') ?>

<article>
	<section class="bg-black fullscreen aligncenter">

		<div class="embed">
		    <video autoplay loop poster="<?= $site->url() ?>/assets/images/timeline.png">
		      <source src="<?= $site->url() ?>/assets/images/timeline.mp4" type="video/mp4">
		    </video>
		</div>
		
	  	<!-- qQwxU7NJWTI ville nuit lumières -->
		<!-- previous yETqkLnhsUI pylones sur fond campagne -->

	  <div class="hp wrap size-40">	    
	    <img src="<?= $site->url() ?>/assets/images/logo_fab_s.png" alt="<?= $site->title() ?>">
	    <?= $site->baseline()->kirbytext() ?>
	    <img id="logo_ieg" src="<?= $site->url() ?>/assets/images/logo_ieg.png">
	  </div>

	  <?php snippet('arrow-down') ?>

	  <!-- .end .wrap -->
	</section>

	<section class="bg-white">
		<div class="wrap size-50 aligncenter">
			<?= $page->intro()->kirbytext() ?>
		</div>
		<div class="wrap size-80">
			<ul class="flexblock features">
		      <li>
		        <a href="/projets">
		          <h2>
		            <img src="<?= $site->url() ?>/assets/images/competences.png">
		            Les 8 projets de formation 
		          </h2>
		        </a>
		      </li>
		      <li>
		        <a href="/competences">
		          <h2>
		            <img src="<?= $site->url() ?>/assets/images/user.png">
		            Les 28 compétences d'avenir
		          </h2>
		        </a>
		      </li>
		      <li>
		        <a href="/#steps">
		          <h2>
		            <img src="<?= $site->url() ?>/assets/images/loupe.png">
		            La démarche en un coup d'oeil
		          </h2>
		        </a>
		      </li>
		  </ul>
		</div>
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

	     <?php elseif ($s->template() == 'steps-slide') : ?> 
	      <?php snippet('steps-slide', array('s' => $s)) ?>

	    <?php endif ?>
	<?php endforeach ?>

	<section class="bg-primary">
	  <span class="background dark" style="background-image:url('<?= $site->url() ?>/assets/images/ateliers.jpg')"></span>
	  <!--.wrap = container 1200px -->
	  <div class="wrap size-30">
	    <form>
	      <fieldset>
	        <legend>La Fabrique d'Énergies</legend>
	        <p>
	        	La Fabrique d’Energies fera l’objet d‘actualisations régulières. Si vous avez des idées à proposer, utilisez le lien ci-dessous :
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