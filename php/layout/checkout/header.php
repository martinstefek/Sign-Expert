<?php
include_once('../../config.php');
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <title>SignExpert</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=3.0, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="sk">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="<?php asset('css/app.css') ?>" rel="stylesheet" type="text/css">
    <link rel="icon" href="<?php asset('img/favicon.ico') ?>">
</head>
<body>
<div style="opacity: 0; width: 0; height: 0; overflow: hidden;">
    <?php include_once(path('img/sprite.svg')) ?>
</div>

<div class="checkout-wrap">
    <header>
        <div class="checkout-header">
            <a href="<?php indexHref() ?>" class="logo" aria-label="Logo">
                <svg class="icon">
                    <use xlink:href="#sprite-logo"></use>
                </svg>
            </a>
        </div>

        <?php
            if ($checkoutProgressBar) {
                checkoutProgress($checkoutActiveIndex);
            }
        ?>
    </header>

    <div class="checkout-main">
        <div class="container">
