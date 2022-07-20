<?php
$phone_number = ['label' => '(865) 377-8538', 'number' => '+18653778538'];
$services = ['Car Accident', 'Truck Accident', 'Motorycylce Accident', 'Dog Bites', 'Accidental Death'];

?>

<!DOCTYPE HTML>
<!--[if lt IE 9]><html class="oldie" lang="en"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
<!--<![endif]-->

<head>
  <!-- Metadata -->
  <meta charset="UTF-8">
  <title>Crashlegal</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="index, follow">



  <!-- Icons -->
  <!-- uncomment for mobile app icon support
    <meta name="msapplication-TileImage" content="/win8-tile-144.png">
    <meta name="msapplication-TileColor" content="#000000">
    <link rel="apple-touch-icon-precomposed" href="/apple-touch-icon-152.png">
    -->
  <link rel="icon" sizes="16x16 32x32" href="/assets/img/logo.svg">
  <!--[if IE]><link rel="shortcut icon" href="/favicon.ico"><![endif]-->

  <!-- Stylesheet & Webfonts -->
  <link rel="stylesheet" href="/assets/css/style.css">

  <!-- Internet Explorer (Enable HTML5 elements) -->
  <!--[if lt IE 9]>
    <script src="//cdnjs.clou dflare.com/ajax/libs/html5shiv/3.6.1/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

  <div class="wrapper">
    <!-- Start Header -->
    <header id="header">
      <div class="logo">
        <a href="index.php" class="title">
          <img src="assets/img/logo.svg">
        </a>
      </div>
      <nav id="nav">
        <ul>
          <li style="white-space: nowrap;" class="mobileHide">Free Consultation</li>
          <li class="opener">
            <a href="tel: <?= $phone_number['number'] ?>" class="button">CALL NOW: <?= $phone_number['label'] ?></a>
          </li>
        </ul>
      </nav>
    </header>
    <!-- End Header -->

    <!-- Start Content -->
    <div id="content">