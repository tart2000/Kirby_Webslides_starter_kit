<?php
kirbytext::$tags['button'] = array(
  'attr' => array(
    'link'
  ),
  'html' => function($tag) {
    $btn = $tag->attr('button');
    $link    = $tag->attr('link', 'button');
    return '<a class="button" href="' . $link . '" target="_blank">' . $btn . '</a>';
  }
);
?>