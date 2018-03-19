<?php snippet('header') ?>

<article>
	<section class="bg-black-blue aligncenter">
	 <span class="background dark" style="background-image:url('https://source.unsplash.com/bwki71ap-y8/')"></span>
	  <!--.wrap = container 1200px -->
	  <div class="wrap">
	    <p class="text-subtitle">Projet de formation n°2</p>
	    <h1 class="text-landing"><?= $page->title() ?></h1>
	    <p class="text-symbols">* * *</p>
	  </div>
	  <!-- .end .wrap -->
	</section>

	<section>
		<div class="wrap size-80 text-intro">
			<?= $page->description()->kirbytext() ?>
		</div>
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

	<section class="bg-light">
	  <div class="wrap">
	    <h3>Recommandations sur les modes d'apprentissage</h3>
	    <ul class="work">
	      <li class="work-label">
	        <p class="work-title"></p>
	        <p class="work-client">Niveau introduction</p>
	        <p class="work-services">Niveau intermédiaire</p>
	        <p class="work-perf">Niveau perfectionnement</p>
	      </li>
	      <li>
	        <a href="#" rel="external">
	          <p class="work-title"><span>Présentiel</span></p>
	          <p class="work-client"><span>X</span></p>
	          <p class="work-services"><span>X</span></p>
	          <p class="work-perf"><span>X</span></p>
	        </a>
	      </li>
	      <li>
	        <a href="#" rel="external">
	          <p class="work-title"><span>Classes à distance</span></p>
	          <p class="work-client"><span></span></p>
	          <p class="work-services"><span></span></p>
	          <p class="work-perf"><span></span></p>
	        </a>
	      </li>
	      <li>
	        <a href="#" rel="external">
	          <p class="work-title"><span>Auto-formation en ligne</span></p>
	          <p class="work-client"><span>X</span></p>
	          <p class="work-services"><span>X</span></p>
	          <p class="work-perf"><span></span></p>
	        </a>
	      </li>
	      <li>
	        <a href="#" rel="external">
	          <p class="work-title"><span>Mise en situation</span></p>
	          <p class="work-client"><span>X</span></p>
	          <p class="work-services"><span>X</span></p>
	          <p class="work-perf"><span>X</span></p>
	        </a>
	      </li>
	      <li>
	        <a href="#" rel="external">
	          <p class="work-title"><span>Accompagnement par un tiers</span></p>
	          <p class="work-client"><span>X</span></p>
	          <p class="work-services"><span>X</span></p>
	          <p class="work-perf"><span>X</span></p>
	        </a>
	      </li>
	    </ul>
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
	      <li>
	        <a href="#">
	          <figure>
	            <img alt="Thumbnail " src="https://source.unsplash.com/-sQ4FsomXEs/800x600">
	            <div class="overlay">
	            	<p class="text-subtitle">Projet précédent</p>
	              	<h2>Création de modules dédiés à une veille spécifique, orientée sur la détection d’opportunités sur son territoire</h2>
	              	<p>* * *</p>
	            </div>
	          </figure>
	        </a>
	      </li>
	      <li>
	        <a href="#">
	          <figure>
	            <img alt="Thumbnail" src="https://source.unsplash.com/vCF5sB7QecM/800x600">
	            <span class="overlay">
	            	<p class="text-subtitle">Projet précédent</p>
		            <h2>Les organismes de formation dédiés au secteur du conseil ou.du marketing, les structures d’appui à l’entrepreneuriat, à l’innovation et aux start-up.</h2>
		            <p>* * *</p>
	            </span>
	          </figure>
	        </a>
	      </li>
	    </ul>
	  </div>
	  <!-- .end .wrap -->
	</section>

</article>

<?php snippet('footer') ?>