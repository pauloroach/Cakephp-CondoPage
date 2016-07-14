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
</head>
<body class="internal-pages sticky trans-header contact type-2">
  <?php echo $this->element('menu', array('current' => 'contactanos')); ?>

	<div id="map">
	</div>
	<!-- Contact Page Container -->
	<div class="contact-page-container container">

		<!-- Contact Info -->
		<div class="contact-info-main-box container">
			<div class="contact-info-inner clearfix">
				<div class="contact-info-box col-md-4">
					<i class="fa fa-envelope-o"></i><div class="info">info@pacifikaownersclub.com</div>
				</div>
				<div class="contact-info-box col-md-4">
					<i class="fa fa-phone"></i><div class="info">01 669 916 0100</div>
				</div>
				<div class="contact-info-box col-md-4">
					<i class="fa fa-map-marker "></i><div class="info">Marina Mazatlán 2312,Marina Mazatlán,82103 Mazatlán, Sin.</div>
				</div>
			</div>
		</div>

		<!-- Contact Form -->
		<div class="contact-form-container">
			<div class="how-contact col-md-4">
				<div class="title"><b>Como</b> contactarnos</div>
				<div class="desc">
					Es un gusto atenderte para darte un mejor servicio, puedes utilizar el formulario de contacto a continuación y nosotros con gusto te devolveremos la llamada, o si prefieres puedes llamarnos al telefono que aparece arriba.
				</div>
			</div>
			<div class="contact-form-box col-md-8">
				<form class="contact-form clearfix" id="contacform">
					<div class="col-md-6">
						<input type="text" name="name" placeholder="Nombre Completo :">
						<input type="email" name="email" placeholder="Correo :">
						<input type="text" name="phone" placeholder="Teléfono :">
					</div>
					<div class="col-md-6">
						<textarea name="message" placeholder="Mensaje : "></textarea>
					</div>
					<div class="submit-container">
						<input type="submit" value="Enviar" class="btn btn-default">
					</div>
				</form>
			</div>
		</div>

	</div>
	<!-- End of Contact Page Container -->


	<?php echo $this->element('footer');?>

	<!-- Include the js files  -->

	<script type="text/javascript" src="/assets/js/jquery.js"></script>
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="/assets/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="/assets/js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="/assets/js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="/assets/js/imagesloaded.pkgd.min.js"></script>
	<script type="text/javascript" src="/assets/js/helper.js"></script>
	<script type="text/javascript" src="/assets/js/template.js"></script>
	<script type="text/javascript">

		"use strict";

		function initialize() {
				var myLatLng = new google.maps.LatLng(23.2754319,-106.457976);
				var mapOptions = {
						zoom: 16,
						center: myLatLng,
						// This is where you would paste any style found on Snazzy Maps.
						//styles: [{featureType:"landscape",stylers:[{saturation:-100},{lightness:65},{visibility:"on"}]},{featureType:"poi",stylers:[{saturation:-100},{lightness:51},{visibility:"simplified"}]},{featureType:"road.highway",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"road.arterial",stylers:[{saturation:-100},{lightness:30},{visibility:"on"}]},{featureType:"road.local",stylers:[{saturation:-100},{lightness:40},{visibility:"on"}]},{featureType:"transit",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"administrative.province",stylers:[{visibility:"off"}]},{featureType:"administrative.locality",stylers:[{visibility:"off"}]},{featureType:"administrative.neighborhood",stylers:[{visibility:"on"}]},{featureType:"water",elementType:"labels",stylers:[{visibility:"off"},{lightness:-25},{saturation:-100}]},{featureType:"water",elementType:"geometry",stylers:[{hue:"#ffff00"},{lightness:-25},{saturation:-97}]}],

						// Extra options
						scrollwheel: false,
						mapTypeControl: false,
						panControl: false,
						zoomControlOptions: {
								style   : google.maps.ZoomControlStyle.SMALL,
								position: google.maps.ControlPosition.LEFT_BOTTOM
						}
				}
				var map = new google.maps.Map(document.getElementById('map'),mapOptions);



				var beachMarker = new google.maps.Marker({
						position: myLatLng,
						map: map
				});
		}

		google.maps.event.addDomListener(window, 'load', initialize);
	</script>

	<!-- End of js files and codes -->
</body>
</html>
