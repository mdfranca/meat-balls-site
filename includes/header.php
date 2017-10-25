<!DOCTYPE html>
<html dir="<?php if(isset($direction) && !empty($direction)) { echo $direction; } else { echo "-"; }?>">
<head>
  <!-- meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="arrowthemes, bakery, cafe, ristorante theme, coffee shop, cooking, dining, food, full screen, html template, menu, pizza, responsive, restaurant, template" />
  <meta name="description" content="<?php if(isset($page_description) && !empty($page_description)) { echo $page_description; } else { echo "-"; }?>" />
  <meta name="author" content="arrowthemes">
  <title><?php if(isset($page_title) && !empty($page_title)) { echo $page_title; } else { echo "-"; }?></title>

  <!-- fav icon -->
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

  <!-- css -->
  <link rel="stylesheet" href="css/plyr.css">
  <?php
    if (isset($page) && !empty($page)) {
      if($page == "events") {
  ?>
  <link rel="stylesheet" href="vendor/fullcalendar/fullcalendar.min.css">
  <?php }}

    if (isset($direction) && !empty($direction) && $direction == "rtl") { ?>
      <link rel="stylesheet" href="css/theme-rtl.css">
    <?php } else { ?>
      <link rel="stylesheet" href="css/theme.css">
    <?php } ?>

  <link rel="stylesheet" href="css/custom.css">

</head>
<body id="tm-container">

  <!-- preloader -->
  <div class="tm-preload">
    <div class="spinner"></div>
  </div>

  <!-- to top scroller -->
  <div class="uk-sticky-placeholder">
    <div data-uk-smooth-scroll data-uk-sticky="{top:-500}">
      <a class="tm-totop-scroller uk-animation-slide-bottom" href="#" ></a>
    </div>
  </div>

  <!-- toolbar -->
  <?php if (($page != "full-slider-layout") && ($page != "video-layout")) {
    include("includes/toolbar.php");
  } ?>

  <!-- menu bar -->
  <?php if ($page == "one-page-layout") {
    include("includes/nav-one-page.php");
   } else {
    include("includes/nav.php"); 
  } ?>
