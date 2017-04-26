<!doctype html>
<html lang="en" prefix="og: http://ogp.me/ns#">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SEO -->
    <title><?php echo $site->title() ?></title>
    <meta name="description" content="<?php echo $site->description() ?>">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,700,700i%7CMaitree:200,300,400,600,700&amp;subset=latin-ext" rel="stylesheet">

    <!-- CSS Base -->
    <?php echo css('assets/css/base.css') ?>

    <!-- CSS Colors -->
    <?php echo css('assets/css/colors.css') ?>

    <!-- Optional - CSS SVG Icons (Font Awesome) -->
    <?php echo css('assets/css/svg-icons.css') ?>

    <!-- Our very own CSS file -->
    <?php echo css('assets/css/main.css') ?>

    <!-- Insert social-cards snippet here when ready -->

    <!-- Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#333333">

  </head>
  <body>

  	<?php snippet('nav') ?>

  	<main role="main">
  		


