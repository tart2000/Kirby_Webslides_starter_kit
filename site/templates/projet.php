<?php snippet('header') ?>

<article class="projet">
	<section class="fullscreen">
	  <div class="card-50">
	    <figure class="bg-white">
	    	<?php if ($page->hasImages()) : ?>
	    		<span class="background light" style="background-image:url('<?= $page->images()->first()->url() ?>')"></span>
	    	<?php endif ?>
		    <div class="wrap aligncenter">
			    <p class="text-subtitle aligncenter">Projet de formation</p>
			    <h2 class="purple"><?= $page->title() ?></h2>
			    <p class="text-symbols">* * *</p>
			</div>
	    </figure>
	    <!-- end figure-->
	    <div class="flex-content">
	      <p><?= $page->description()->kirbytext() ?></p>
	      <i class="fa fa-arrow-down aligncenter"></i>
	    </div>
	    <!-- end .flex-content-->
	  </div>
	  <!-- end .card-50-->
	</section>

	<section class="bg-light">
		<div class="wrap size-80">
			<h3><img src="<?= $site->url() ?>/assets/images/enjeux.png"> Enjeux de formation à 5 à 10 ans</h3>
			<?= $page->enjeux()->kirbytext() ?>
			<h3><img src="<?= $site->url() ?>/assets/images/pre-requis.png"> Pré-requis</h3>
			<?= $page->pre()->kirbytext() ?>
		</div>
	</section>

	<section>
	  <div class="wrap">
	    <h3>Parcours de formation</h3>
	    <div class="grid vertical-align">
	      <div class="column">
	        <strong><img src="<?= $site->url() ?>/assets/images/intro.png"> Niveau introduction</strong>
	        <p><?= $page->intro()->kirbytext() ?></p>
	        <div class="percents lowlow">
	        	<?php if ($page->prez1() != '') : ?>
		        	<div class="percent prez" style="width:<?= $page->prez1() ?>%;">
		        		<a href="#">
		        			<span class="show-on-hover">Présentiel </span>
			        		<i class="fa fa-university"></i> 
			        		<span class="width"><?= $page->prez1() ?>%</span>
			        		<a href="<?= $site->url() ?>/modes-apprentissage" class="show-on-hover right">?</a>
			        	</a>
		        	</div>
		        <?php endif ?>
		        <?php if ($page->dist1() != '') : ?>
		        	<div class="percent dist" style="width:<?= $page->dist1() ?>%;">
		        		<a href="#">
		        			<span class="show-on-hover">Classe à distance </span>
			        		<i class="fa fa-laptop"></i> 
			        		<span class="width"><?= $page->dist1() ?>%</span>
			        		<a href="<?= $site->url() ?>/modes-apprentissage" class="show-on-hover right">?</a>
						</a>
		        	</div>
	        	<?php endif ?>
		        <?php if ($page->elear1() != '') : ?>
		        	<div class="percent elear" style="width:<?= $page->elear1() ?>%;">
		        		<a href="#">
		        			<span class="show-on-hover">E-learning </span>
			        		<i class="fa fa-play-circle"></i> 
			        		<span class="width"><?= $page->elear1() ?>%</span>
			        		<a href="<?= $site->url() ?>/modes-apprentissage" class="show-on-hover right">?</a>
			        	</a>
		        	</div>
	        	<?php endif ?>
		        <?php if ($page->pro1() != '') : ?>
		        	<div class="percent pro" style="width:<?= $page->pro1() ?>%;">
		        		<a href="#">
		        			<span class="show-on-hover">Mise en situation </span>
			        		<i class="fa fa-street-view"></i> 
			        		<span class="width"><?= $page->pro1() ?>%</span>
			        		<a href="<?= $site->url() ?>/modes-apprentissage" class="show-on-hover right">?</a>
			        	</a>
		        	</div>
	        	<?php endif ?>
		        <?php if ($page->coa1() != '') : ?>
		        	<div class="percent coa" style="width:<?= $page->coa1() ?>%;">
		        		<a href="#">
		        			<span class="show-on-hover">Accompagnement </span>
			        		<i class="fa fa-comments"></i> 
			        		<span class="width"><?= $page->coa1() ?>%</span>
			        		<a href="<?= $site->url() ?>/modes-apprentissage" class="show-on-hover right">?</a>
			        	</a>
		        	</div>
	        	<?php endif ?>
	        </div>
	      </div>
	      <div class="column">
	        <strong><img src="<?= $site->url() ?>/assets/images/inter.png"> Niveau intermédiaire</strong>
	        <p><?= $page->inter()->kirbytext() ?></p>
	       	<div class="percents lowlow">
	        	<?php if ($page->prez2() != '') : ?>
		        	<div class="percent prez" style="width:<?= $page->prez2() ?>%;">
		        		<a href="#">
		        			<span class="show-on-hover">Présentiel </span>
			        		<i class="fa fa-university"></i> 
			        		<span class="width"><?= $page->prez2() ?>%</span>
			        		<a href="<?= $site->url() ?>/modes-apprentissage" class="show-on-hover right">?</a>
			        	</a>
		        	</div>
		        <?php endif ?>
		        <?php if ($page->dist2() != '') : ?>
		        	<div class="percent dist" style="width:<?= $page->dist2() ?>%;">
		        		<a href="#">
		        			<span class="show-on-hover">Classe à distance </span>
			        		<i class="fa fa-laptop"></i> 
			        		<span class="width"><?= $page->dist2() ?>%</span>
			        		<a href="<?= $site->url() ?>/modes-apprentissage" class="show-on-hover right">?</a>
						</a>
		        	</div>
	        	<?php endif ?>
		        <?php if ($page->elear2() != '') : ?>
		        	<div class="percent elear" style="width:<?= $page->elear2() ?>%;">
		        		<a href="#">
		        			<span class="show-on-hover">E-learning </span>
			        		<i class="fa fa-play-circle"></i> 
			        		<span class="width"><?= $page->elear2() ?>%</span>
			        		<a href="<?= $site->url() ?>/modes-apprentissage" class="show-on-hover right">?</a>
			        	</a>
		        	</div>
	        	<?php endif ?>
		        <?php if ($page->pro2() != '') : ?>
		        	<div class="percent pro" style="width:<?= $page->pro2() ?>%;">
		        		<a href="#">
		        			<span class="show-on-hover">Mise en situation </span>
			        		<i class="fa fa-street-view"></i> 
			        		<span class="width"><?= $page->pro2() ?>%</span>
			        		<a href="<?= $site->url() ?>/modes-apprentissage" class="show-on-hover right">?</a>
			        	</a>
		        	</div>
	        	<?php endif ?>
		        <?php if ($page->coa2() != '') : ?>
		        	<div class="percent coa" style="width:<?= $page->coa2() ?>%;">
		        		<a href="#">
		        			<span class="show-on-hover">Accompagnement </span>
			        		<i class="fa fa-comments"></i> 
			        		<span class="width"><?= $page->coa2() ?>%</span>
			        		<a href="<?= $site->url() ?>/modes-apprentissage" class="show-on-hover right">?</a>
			        	</a>
		        	</div>
	        	<?php endif ?>
	        </div>
	      </div>

	      <div class="column">
	        <strong><img src="<?= $site->url() ?>/assets/images/perf.png"> Niveau perfectionnement</strong>
	        <p><?= $page->perf()->kirbytext() ?></p>
	       	<div class="percents lowlow">
	        	<?php if ($page->prez3() != '') : ?>
		        	<div class="percent prez" style="width:<?= $page->prez3() ?>%;">
		        		<a href="#">
		        			<span class="show-on-hover">Présentiel </span>
			        		<i class="fa fa-university"></i> 
			        		<span class="width"><?= $page->prez3() ?>%</span>
			        		<a href="<?= $site->url() ?>/modes-apprentissage" class="show-on-hover right">?</a>
			        	</a>
		        	</div>
		        <?php endif ?>
		        <?php if ($page->dist3() != '') : ?>
		        	<div class="percent dist" style="width:<?= $page->dist3() ?>%;">
		        		<a href="#">
		        			<span class="show-on-hover">Classe à distance </span>
			        		<i class="fa fa-laptop"></i> 
			        		<span class="width"><?= $page->dist3() ?>%</span>
			        		<a href="<?= $site->url() ?>/modes-apprentissage" class="show-on-hover right">?</a>
						</a>
		        	</div>
	        	<?php endif ?>
		        <?php if ($page->elear3() != '') : ?>
		        	<div class="percent elear" style="width:<?= $page->elear3() ?>%;">
		        		<a href="#">
		        			<span class="show-on-hover">E-learning </span>
			        		<i class="fa fa-play-circle"></i> 
			        		<span class="width"><?= $page->elear3() ?>%</span>
			        		<a href="<?= $site->url() ?>/modes-apprentissage" class="show-on-hover right">?</a>
			        	</a>
		        	</div>
	        	<?php endif ?>
		        <?php if ($page->pro3() != '') : ?>
		        	<div class="percent pro" style="width:<?= $page->pro3() ?>%;">
		        		<a href="#">
		        			<span class="show-on-hover">Mise en situation </span>
			        		<i class="fa fa-street-view"></i> 
			        		<span class="width"><?= $page->pro3() ?>%</span>
			        		<a href="<?= $site->url() ?>/modes-apprentissage" class="show-on-hover right">?</a>
			        	</a>
		        	</div>
	        	<?php endif ?>
		        <?php if ($page->coa3() != '') : ?>
		        	<div class="percent coa" style="width:<?= $page->coa3() ?>%;">
		        		<a href="#">
		        			<span class="show-on-hover">Accompagnement </span>
			        		<i class="fa fa-comments"></i> 
			        		<span class="width"><?= $page->coa3() ?>%</span>
			        		<a href="<?= $site->url() ?>/modes-apprentissage" class="show-on-hover right">?</a>
			        	</a>
		        	</div>
	        	<?php endif ?>
	        </div><!-- end percents -->
	      </div>
	    </div>
	    <!--end .grid -->
	  </div>
	  <!-- .end .wrap -->
	</section>

	<section>
	  <div class="wrap size-80">
	    <h3>Recommandations sur les modules de formation à créer</h3>
	    <?= $page->reco()->kirbytext() ?>
	  </div>
	  <!-- .end .wrap -->
	</section>

	<section class="bg-white">
	  <div class="wrap aligncenter">
	    <h3>Autres projets de formation</h3>
	    <ul class="flexblock gallery">
	    	<?php if ($page->hasPrev()) : ?>
		      <li >
		        <a  href="<?= $page->prev()->url() ?>">
		          <figure class="bg-white">
		          	<span class="background light" style="background-image:url('<?= $page->prev()->images()->first()->url() ?>')"></span>
		            <div class="wrap aligncenter project-card">
		            	<p class="text-subtitle aligncenter">Projet précédent</p>
		              	<h2><?= $page->prev()->title() ?></h2>
		              	<p class="aligncenter">* * *</p>
		            </div>
		          </figure>
		        </a>
		      </li>
		  <?php endif ?>
		  <?php if ($page->hasNext()) : ?>
		      <li>
		        <a href="<?= $page->next()->url() ?>">
		          <figure class="bg-white">
		          	<span class="background light" style="background-image:url('<?= $page->next()->images()->first()->url() ?>')"></span>
		            <div class="wrap aligncenter project-card">
		            	<p class="text-subtitle aligncenter">Projet suivant</p>
			            <h2><?= $page->next()->title() ?></h2>
			            <p class="aligncenter">* * *</p>
		            </div>
		          </figure>
		        </a>
		      </li>
		  <?php endif ?>
	    </ul>
	  </div>
	  <!-- .end .wrap -->
	</section>

</article>



<?php snippet('footer') ?>

<script type="text/javascript">
	$( ".percent" ).hover(
	  function(e) {
	    $(this).find('.show-on-hover').show();
	    $(this).siblings().hide();
	    $(this).width('100%');
	  }, function(e) {
	  	$(this).find('.show-on-hover').hide();
	  	$(this).siblings().show();
	  	var wid = $(this).find('.width').text();
	  	console.log(wid);
	  	$(this).width(wid);

	  }
	);
</script>