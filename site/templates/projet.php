<?php snippet('header') ?>

<article class="projet">
	<section class="fullscreen">
	  <div class="card-50">
	    <figure class="bg-black-blue">
	    	<span class="background dark" style="background-image:url('https://source.unsplash.com/bwki71ap-y8/1440x1440')"></span>
		    <div class="wrap aligncenter">
			    <p class="text-subtitle">Projet de formation</p>
			    <h2><?= $page->title() ?></h2>
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
			<h3>Enjeux de formation à 5 à 10 ans</h3>
			<?= $page->enjeux()->kirbytext() ?>
			<h3>Pré-requis</h3>
			<?= $page->pre()->kirbytext() ?>
		</div>
	</section>

	<section>
	  <div class="wrap">
	    <h3>Parcours de formation</h3>
	    <div class="grid vertical-align">
	      <div class="column">
	        <strong>Niveau introduction</strong>
	        <p><?= $page->intro()->kirbytext() ?></p>
	      </div>
	      <div class="column">
	        <strong>Niveau intermédiaire</strong>
	        <p><?= $page->inter()->kirbytext() ?></p>
	      </div>
	      <div class="column">
	        <strong>Niveau perfectionnement</strong>
	        <p><?= $page->perf()->kirbytext() ?></p>
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
	      <li >
	        <a  href="#">
	          <figure class="bg-black-blue">
	          	<span class="background dark" style="background-image:url('https://source.unsplash.com/-sQ4FsomXEs/800x800')"></span>
	            <div class="wrap aligncenter project-card">
	            	<p class="text-subtitle">Projet précédent</p>
	              	<h2>Création de modules dédiés à une veille spécifique, orientée sur la détection d’opportunités sur son territoire</h2>
	              	<p>* * *</p>
	            </div>
	          </figure>
	        </a>
	      </li>
	      <li>
	        <a href="#">
	          <figure class="bg-black-blue">
	          	<span class="background dark" style="background-image:url('https://source.unsplash.com/vCF5sB7QecM/800x800')"></span>
	            <div class="wrap aligncenter project-card">
	            	<p class="text-subtitle">Projet suivant</p>
		            <h2>Les organismes de formation dédiés au secteur du conseil ou.du marketing, les structures d’appui à l’entrepreneuriat, à l’innovation et aux start-up.</h2>
		            <p>* * *</p>
	            </div>
	          </figure>
	        </a>
	      </li>
	    </ul>
	  </div>
	  <!-- .end .wrap -->
	</section>

</article>

<?php snippet('footer') ?>