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
        
        <header class="header">
            <div class="container">
                <a class="logo" href="<?= url() ?>"><?= $site->title()->html() ?></a>
    
            <?php snippet('menu') ?>      

            </div>
        </header>

        

