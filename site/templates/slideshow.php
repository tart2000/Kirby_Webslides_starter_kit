<?php snippet('header') ?>

<article id="webslides">  <!-- Slideshow -->

  <?php foreach ($page->children() as $s) : ?>

    <?php if ($s->template() == 'cover-slide') : ?>
      <?php snippet('cover-slide',array('s' => $s)) ?>

    <?php elseif ($s->template() == 'default-slide') : ?>
      <?php snippet('default-slide', array('s' => $s)) ?>

    <?php elseif ($s->template() == 'card-slide') : ?>
      <?php snippet('card-slide', array('s' => $s)) ?>      

    <?php elseif ($s->template() == 'portfolio-slide') : ?> 
      <?php snippet('portfolio-slide', array('s' => $s)) ?>

    <?php elseif ($s->template() == 'quote-slide') : ?> 
      <?php snippet('quote-slide', array('s' => $s)) ?>

    <?php elseif ($s->template() == 'chapter-slide') : ?> 
      <?php snippet('chapter-slide', array('s' => $s)) ?>

    <?php elseif ($s->template() == 'video-slide') : ?> 
      <?php snippet('video-slide', array('s' => $s)) ?>

    <?php endif ?>

  <?php endforeach ?>

</article>

<?php snippet('footer') ?>