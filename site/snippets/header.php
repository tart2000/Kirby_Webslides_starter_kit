<!doctype html>
<html lang="en" prefix="og: http://ogp.me/ns#">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CLEAN MARKUP = GOOD KARMA.
      Hi source code lover,

      you're a curious person and a fast learner ;)
      Let's make something beautiful together. Contribute on Github:
      https://github.com/jlantunez/webslides

      Thanks,
      @jlantunez.
    -->

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

    <?php echo css('assets/css/main.css') ?>


    <!-- SOCIAL CARDS (ADD YOUR INFO) -->

    <!-- FACEBOOK -->
    <meta property="og:url" content="<?php echo $site->url() ?>"> <!-- EDIT -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?php echo $site->title() ?>"> <!-- EDIT -->
    <meta property="og:description" content="<?php echo $site->description() ?>"> <!-- EDIT -->
    <meta property="og:updated_time" content="2017-01-04T17:22:34"> <!-- EDIT -->
    <meta property="og:image" content="../assets/images/share-piscine.jpg" > <!-- EDIT -->

    <!-- TWITTER -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content=""> <!-- EDIT -->
    <meta name="twitter:creator" content="@tart2000"> <!-- EDIT -->
    <meta name="twitter:title" content="<?php echo $site->title() ?>"> <!-- EDIT -->
    <meta name="twitter:description" content="<?php echo $site->description() ?>"> <!-- EDIT -->
    <meta name="twitter:image" content="../assets/images/share-piscine.jpg"> <!-- EDIT -->

    <!-- FAVICONS -->
    <link rel="shortcut icon" sizes="16x16" href="../assets/images/favicons/favicon.png">
    <link rel="shortcut icon" sizes="32x32" href="../assets/images/favicons/favicon-32.png">
    <link rel="apple-touch-icon icon" sizes="76x76" href="../assets/images/favicons/favicon-76.png">
    <link rel="apple-touch-icon icon" sizes="120x120" href="../assets/images/favicons/favicon-120.png">
    <link rel="apple-touch-icon icon" sizes="152x152" href="../assets/images/favicons/favicon-152.png">
    <link rel="apple-touch-icon icon" sizes="180x180" href="../assets/images/favicons/favicon-180.png">
    <link rel="apple-touch-icon icon" sizes="192x192" href="../assets/images/favicons/favicon-192.png">

    <!-- Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#333333">

  </head>
  <body>

  	<?php snippet('nav') ?>

  	<main role="main">
  		<article id="webslides">  <!-- Slideshow? id="webslides" -->


