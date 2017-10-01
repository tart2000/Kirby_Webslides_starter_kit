<section>
	<div class="wrap">
	    <div class="grid sm">
	      <div class="column">
	      	<img src="<?= $e->images()->first()->url() ?>">
	      	<div class="meta">
		        <p>Produit par : <?= $e->qui() ?></p>
		        <p>Date d'édition : <?= $e->quand() ?></p>
		        <p>Périmère : <?= $e->perimetre() ?></p>
		        <p>Catégorie : <em class="mytag"><?= $e->tags() ?></em></p>
		        <p>Horizon : <em class="mytag"><?= $e->horizon() ?></em></p>
		    </div>
	      	<a href="<?= $e->link() ?>" target="_blank" class="button">Lire</a>
	      	<a class="retour" href="<?= $e->parent()->url() ?>">Retour vers la bibliographie</a>
	      </div>
	      <div class="column">
	        <h3><?= $e->title() ?></h3>
	        <h5>"<?= $e->objectifs() ?>"</h5>
	        <hr>
	        <p class="text-subtitle">Principaux messages</p>
	        <?= $e->messages()->kirbytext() ?>
	        <p class="text-subtitle">Facteurs de changement à noter</p>
	      	<?= $e->facteurs()->kirbytext() ?>
	      </div>
	    </div>
	    <!--end .grid -->
	</div>
</section>