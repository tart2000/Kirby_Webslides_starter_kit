<?php 

function makeImage($item) {
	if ($item->img() != '') {
		// Si il y a un code Unsplash, on le prend 
		$image = 'https://source.unsplash.com/'.$item->img().'/1440x1440';
	}
	else if ($item->slideimg() != '') {
		// Si une est sélectionnée, on y va 
		$file = $item->slideimg()->toFile();
		$image = $file->url(); 

	} elseif ($item->hasImages()) {
		// Dans le doute, on prend la première 
		$image = $item->images()->first()->url();
		
	} else {
		// Une image par défaut 
		$image = 'http://doc.thecamp.fr/assets/images/thecamp1.jpg';
	}
	return $image;
}

function goToSlide($page) {
	if ($page->num() != '') {
		$url = $page->parent()->url().'/#slide='.$page->num();
		go($url);
	} else {
		go($page->parent()->url());
	}
}

?>