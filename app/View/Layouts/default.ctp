<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pacifika Owners Club</title><!-- Website's title ( it will be shown in browser's tab ), Change the website's title based on your Hotel information -->
	<meta name="description" content="Pinar is Hotel and Resort HTML template."><!-- Add your Hotel short description -->
	<meta name="keywords" content="Responsive,HTML5,CSS3,XML,JavaScript"><!-- Add some Keywords based on your Hotel and your business and separate them by comma -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=no">
	<link href='https://fonts.googleapis.com/css?family=Lobster%7cRaleway:400,300,100,600,700,800' rel='stylesheet' type='text/css'><!-- Attach Google fonts -->
	<link rel="stylesheet" type="text/css" href="/assets/css/styles.css"><!-- Attach the main stylesheet file -->
	<link rel="stylesheet" type="text/css" href="/css/custom.css"><!-- Attach the main stylesheet file -->
	<script type="text/javascript" src="https://conektaapi.s3.amazonaws.com/v0.3.2/js/conekta.js"></script>
</head>
<body class="homepage trans-header sticky white-datepicker">

	<?php echo $this->element('menu');?>


	<!-- Internal Page Header -->
	<div class="internal-page-title about-page" data-parallax="scroll" data-image-src="/assets/img/internal-header.jpg">
		<h1><span>Pacifika Owners Club</span></h1>
		<ol class="breadcrumb"><!-- Internal Page Breadcrumb -->
      <li><a href="/">Inicio</a></li>
    </ol>
	</div>
	<!-- End of Internal Page Header -->
	<!-- Main Container -->
	<div class="main-content container">

		<!-- Page Content -->
		<div class="page-content col-md-9">
			<?php echo $this->fetch('content'); ?>
		</div>

		<!-- Sidebar Section -->
		<aside class="sidebar right-sidebar col-md-3">
			<?php echo $this->element('search_widget'); ?>
		</aside>
		<!-- Sidebar Section -->
	</div>

	<!-- Include the js files  -->
	<script type="text/javascript" src="/assets/js/jquery.js"></script>
	<script type="text/javascript" src="/assets/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="/assets/js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="/assets/js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="/assets/js/imagesloaded.pkgd.min.js"></script>
	<script type="text/javascript" src="/assets/js/helper.js"></script>
	<script type="text/javascript" src="/assets/js/template.js"></script>
	<script type="text/javascript">
	jQuery(document).ready(function($) {
		"use strict";
		// Init the Wow plugin
    	new WOW({mobile: false}).init();
	});
	</script>

	<!-- End of js files and codes -->
</body>
</html>
