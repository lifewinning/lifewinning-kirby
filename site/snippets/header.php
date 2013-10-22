
<!DOCTYPE html>

<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> </title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- modernizr -->
  <?php echo js('assets/styles/modernizr-latest.js') ?>
  
<!-- jquery -->
  <?php echo js('assets/styles/jquery-1.10.2.min.js') ?>

<!-- borrowing responsive text library from Groundwork -->
  <?php echo js('assets/styles/groundworkjs/groundwork.all.js') ?>
   <?php echo js('assets/styles/groundworkjs/jquery-responsiveText.js') ?>
  

<!-- boostrap -->
  <?php echo css('assets/styles/bootstrap/css/bootstrap.min.css') ?>
  <?php echo css('assets/styles/bootstrap/css/bootstrap-responsive.min.css') ?>
  <?php echo js('assets/styles/bootstrap/js/bootstrap.min.js') ?>

<!-- custom stylesheet -->
 <?php echo css('assets/styles/style_.css') ?>

 <!-- font awesome -->
 <? echo css("assets/styles/font-awesome/css/font-awesome.min.css")?>
<!--[if IE 7]>
  <link rel="stylesheet" href="assets/styles/font-awesome/css/font-awesome-ie7.min.css">
<![endif]-->

<!-- load google font -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic|Bitter' rel='stylesheet' type='text/css'>

<!-- isotope -->
  <?php echo js('assets/styles/isotope-site/jquery.isotope.min.js') ?>
  <?php echo js ('assets/styles/imagesloaded.pkgd.min.js')?>

</head>

<body>

 