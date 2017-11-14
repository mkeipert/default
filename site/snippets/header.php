<!doctype html>
<html class="no-js" lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
        
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
    <?php if ($page->description()=="") : ?>
        <meta name="description" content="<?= $site->description()->html() ?>" />
    <?php else : ?>
        <meta name="description" content="<?= $page->description()->html() ?>" />
    <?php endif ?>

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,700" rel="stylesheet">

    <?= css('assets/font-awesome/css/font-awesome.min.css') ?>
    <?= css('assets/magnific-popup/magnific-popup.css') ?>
    <?= css('assets/css/base.css') ?>

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo kirby()->urls()->assets() ?>/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo kirby()->urls()->assets() ?>/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo kirby()->urls()->assets() ?>/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo kirby()->urls()->assets() ?>/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo kirby()->urls()->assets() ?>/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo kirby()->urls()->assets() ?>/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo kirby()->urls()->assets() ?>/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo kirby()->urls()->assets() ?>/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo kirby()->urls()->assets() ?>/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo kirby()->urls()->assets() ?>/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo kirby()->urls()->assets() ?>/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo kirby()->urls()->assets() ?>/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo kirby()->urls()->assets() ?>/icons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo kirby()->urls()->assets() ?>/icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo kirby()->urls()->assets() ?>/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <?= js('assets/js/vendor/modernizr-2.8.3.min.js') ?>

</head>
<body class="<?= $page->template() ?>">
    
    <!--[if lt IE 10]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div id="page">
        <div id="barwrap">
            <div id="bar"></div>
        </div>

        <div id="header_wrap">
            <header id="header" class="container">
                <div class="sticky_wrap">
                    <div class="branding">
                        <a href="<?= url() ?>" rel="home" id="logo"><?= $site->title()->html() ?></a>
                    </div>
                    <div id="navwrap">
                        <h1 class="mobile-header hide-on-medium-plus">fm control</h1>
                        <a class="skip hide-on-medium-plus" href="#menu">
                            <button class="lines-button x" type="button" role="button" aria-label="Toggle Navigation">
                                <span class="lines"></span>
                            </button>
                        </a>
                        <nav id="header_nav">
                            <?php snippet('menu') ?>
                            <?php snippet('additional_menu') ?>
                        </nav>
                    </div>
                </div>
            </header>
        </div>
        <div id="sticky_space"></div>
       
        <?php if ($page->isHomePage()) : ?>
            <div id="banner">
                <div class="container">
                    <img src="<?php echo kirby()->urls()->assets() ?>/images/fm-control-start.jpg" />
                    <?php echo $page->bannertext()->kirbytext() ?>
                </div>
            </div>
        <?php else : ?>
            <div id="banner">
                <div class="container">
                    <?php echo $page->intro()->kirbytext() ?>
                </div>
            </div>
        <?php endif ?>
        

