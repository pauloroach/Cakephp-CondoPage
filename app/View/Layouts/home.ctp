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
	<link rel="stylesheet" type="text/css" href="/css/custom.css">
	<script type="text/javascript" src="https://conektaapi.s3.amazonaws.com/v0.3.2/js/conekta.js"></script>
</head>
<body class="homepage trans-header sticky white-datepicker">
  <?php echo $this->element('menu');?>

	<!-- Top Slider and Booking form -->
	<div id="home-top-section">

		<!-- Main Slider -->
		<div id="main-slider">
			<div class="items">
	            <a href="http://google.com">
	            	<img src="/assets/img/slider/new/1.jpg" alt="3"/><!-- Change the URL section based on your image\'s name -->
	            </a>
	        </div>
	        <div class="items">
	            <a href="http://google.com">
	            	<img src="/assets/img/slider/new/3.jpg" alt="3"/>
	            </a>
	        </div>
	        <div class="items">
	            <a href="http://google.com">
	            	<img src="/assets/img/slider/new/4.jpg" alt="4"/>
	            </a>
	        </div>
	        <div class="items">
	            <a href="http://google.com">
	            	<img src="/assets/img/slider/new/2.jpg" alt="2"/>
	            </a>
	        </div>
					<div class="items">
	            <a href="http://google.com">
	            	<img src="/assets/img/slider/new/5.jpg" alt="2"/>
	            </a>
	        </div>
	    </div>

		<!-- Booking Form -->
		<div class="booking-form-container container">
			<div class="booking-form-inner-container">
				<div id="main-booking-form" class="style-2">
					<h2>Buscar <span>Suite</span></h2>
					<form class="booking-form clearfix" action="/reservations/search"><!-- Do Not remove the classes -->
						<div class="input-daterange clearfix">
		            <div class="booking-fields col-xs-6 col-md-12">
		                <input placeholder="Fecha de Llegada" class="datepicker-fields check-in" type="text" name="arrival" /><!-- Date Picker field ( Do Not remove the "datepicker-fields" class ) -->
		                <i class="fa fa-calendar"></i><!-- Date Picker Icon -->
		            </div>
		            <div class="booking-fields col-xs-6 col-md-12">
		                <input placeholder="Fecha de Salida" class="datepicker-fields check-out" type="text" name="departure" />
		                <i class="fa fa-calendar"></i>
		            </div>
		        </div>
            <div class="booking-fields col-xs-6 col-md-12">
                <!-- Select boxes ( you can change the items and its value based on your project's needs ) -->
                <select name="adults">
                    <option value="">¿Cuantos Adultos?</option><!-- Select box items ( you can change the items and its value based on your project's needs ) -->
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <!-- End of Select boxes -->
            </div>
            <div class="booking-fields col-xs-6 col-md-12">
                <select name="children">
                    <option value="">¿Cuantos Niños?</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="booking-button-container">
                <input class="btn btn-default" value="Buscar" type="submit"/><!-- Submit button -->
            </div>
	        </form>
				</div>
			</div>
		</div>
	</div>
	<!-- End of Top Slider and Booking form -->





	<!-- Gallery -->
	<div id="gallery">
		<!-- Heading box -->
		<div class="heading-box">
			<h2>Pacifika <span>Owners</span> Club</h2><!-- Title -->
		</div>

		<!-- Gallery Container -->
		<div class="gallery-container">
			<div class="sort-section">
				<div class="sort-section-container">
					<div class="sort-handle">Filters</div>
					<ul class="list-inline">
						<li><a href="/" data-filter="*" class="active">Todas</a></li>
						<li><a href="/" data-filter=".lobby">Lobby</a></li>
						<li><a href="/" data-filter=".pool">Alberca</a></li>
						<li><a href="/" data-filter=".rooms">Suites</a></li>
						<li><a href="/" data-filter=".near">Estanque</a></li>
					</ul>
				</div>
			</div>
			<ul class="image-main-box clearfix">
				<li class="item col-xs-6 col-md-3 lobby">
					<figure>
						<img src="/img/galeria/lobby.jpg" alt="11"/>
						<a href="/img/galeria/lobby.jpg" class="more-details" data-title="Lobby">Ver</a>
						<figcaption>
							<h4><span>Lobby</span></h4>
						</figcaption>
					</figure>
				</li>
				<li class="item col-xs-6 col-md-3 lobby">
					<figure>
						<img src="/img/galeria/lobby1.jpg" alt="11"/>
						<a href="/img/galeria/lobby1.jpg" class="more-details" data-title="Lobby">Ver</a>
						<figcaption>
							<h4><span>Lobby</span></h4>
						</figcaption>
					</figure>
				</li>
				<li class="item col-xs-6 col-md-3 lobby">
					<figure>
						<img src="/img/galeria/lobby2.jpg" alt="11"/>
						<a href="/img/galeria/lobby2.jpg" class="more-details" data-title="Lobby">Ver</a>
						<figcaption>
							<h4><span>Lobby</span></h4>
						</figcaption>
					</figure>
				</li>
				<li class="item col-xs-6 col-md-3 lobby">
					<figure>
						<img src="/img/galeria/lobby3.jpg" alt="11"/>
						<a href="/img/galeria/lobby3.jpg" class="more-details" data-title="Lobby">Ver</a>
						<figcaption>
							<h4><span>Lobby</span></h4>
						</figcaption>
					</figure>
				</li>
				<li class="item col-xs-6 col-md-3 lobby">
					<figure>
						<img src="/img/galeria/lobby4.jpg" alt="11"/>
						<a href="/img/galeria/lobby4.jpg" class="more-details" data-title="Lobby">Ver</a>
						<figcaption>
							<h4><span>Lobby</span></h4>
						</figcaption>
					</figure>
				</li>

				<li class="item col-xs-6 col-md-6 pool">
					<figure>
						<img src="/img/galeria/alberca.jpg" alt="11"/>
						<a href="/img/galeria/alberca.jpg" class="more-details" data-title="Alberca">Ver</a>
						<figcaption>
							<h4><span>Alberca</span></h4>
						</figcaption>
					</figure>
				</li>
				<li class="item col-xs-6 col-md-3 pool">
					<figure>
						<img src="/img/galeria/alberca2.jpg" alt="11"/>
						<a href="/img/galeria/alberca2.jpg" class="more-details" data-title="Alberca">Ver</a>
						<figcaption>
							<h4><span>Alberca</span></h4>
						</figcaption>
					</figure>
				</li>
				<li class="item col-xs-6 col-md-3 pool">
					<figure>
						<img src="/img/galeria/alberca3.jpg" alt="11"/>
						<a href="/img/galeria/alberca3.jpg" class="more-details" data-title="Alberca">Ver</a>
						<figcaption>
							<h4><span>Alberca</span></h4>
						</figcaption>
					</figure>
				</li>
				<li class="item col-xs-6 col-md-3 pool">
					<figure>
						<img src="/img/galeria/alberca4.jpg" alt="11"/>
						<a href="/img/galeria/alberca4.jpg" class="more-details" data-title="Alberca">Ver</a>
						<figcaption>
							<h4><span>Alberca</span></h4>
						</figcaption>
					</figure>
				</li>
				<li class="item col-xs-6 col-md-3 pool">
					<figure>
						<img src="/img/galeria/alberca5.jpg" alt="11"/>
						<a href="/img/galeria/alberca5.jpg" class="more-details" data-title="Alberca">Ver</a>
						<figcaption>
							<h4><span>Alberca</span></h4>
						</figcaption>
					</figure>
				</li>
				<li class="item col-xs-6 col-md-3 pool">
					<figure>
						<img src="/img/galeria/alberca6.jpg" alt="11"/>
						<a href="/img/galeria/alberca6.jpg" class="more-details" data-title="Alberca">Ver</a>
						<figcaption>
							<h4><span>Alberca</span></h4>
						</figcaption>
					</figure>
				</li>
				<li class="item col-xs-6 col-md-3 pool">
					<figure>
						<img src="/img/galeria/alberca7.jpg" alt="11"/>
						<a href="/img/galeria/alberca7.jpg" class="more-details" data-title="Alberca">Ver</a>
						<figcaption>
							<h4><span>Alberca</span></h4>
						</figcaption>
					</figure>
				</li>
				<li class="item col-xs-6 col-md-3 pool">
					<figure>
						<img src="/img/galeria/alberca8.jpg" alt="11"/>
						<a href="/img/galeria/alberca8.jpg" class="more-details" data-title="Alberca">Ver</a>
						<figcaption>
							<h4><span>Alberca</span></h4>
						</figcaption>
					</figure>
				</li>
				<li class="item col-xs-6 col-md-3 rooms">
					<figure>
						<img src="/img/galeria/recamaras.jpg" alt="11"/>
						<a href="/img/galeria/recamaras.jpg" class="more-details" data-title="Suites">Ver</a>
						<figcaption>
							<h4><span>Suites</span></h4>
						</figcaption>
					</figure>
				</li>
				<li class="item col-xs-6 col-md-3 rooms">
					<figure>
						<img src="/img/galeria/recamaras.jpg" alt="11"/>
						<a href="/img/galeria/recamaras.jpg" class="more-details" data-title="Suites">Ver</a>
						<figcaption>
							<h4><span>Suites</span></h4>
						</figcaption>
					</figure>
				</li>
				<li class="item col-xs-6 col-md-3 rooms">
					<figure>
						<img src="/img/galeria/recamaras.jpg" alt="11"/>
						<a href="/img/galeria/recamaras.jpg" class="more-details" data-title="Suites">Ver</a>
						<figcaption>
							<h4><span>Suites</span></h4>
						</figcaption>
					</figure>
				</li>
				<li class="item col-xs-6 col-md-3 rooms">
					<figure>
						<img src="/img/galeria/2005a.jpg" alt="11"/>
						<a href="/img/galeria/2005a.jpg" class="more-details" data-title="Suites">Ver</a>
						<figcaption>
							<h4><span>Suites</span></h4>
						</figcaption>
					</figure>
				</li>
				<li class="item col-xs-6 col-md-3 rooms">
					<figure>
						<img src="/img/galeria/2005b.jpg" alt="11"/>
						<a href="/img/galeria/2005b.jpg" class="more-details" data-title="Suites">Ver</a>
						<figcaption>
							<h4><span>Suites</span></h4>
						</figcaption>
					</figure>
				</li>
				<li class="item col-xs-6 col-md-3 rooms">
					<figure>
						<img src="/img/galeria/2005c.jpg" alt="11"/>
						<a href="/img/galeria/2005c.jpg" class="more-details" data-title="Suites">Ver</a>
						<figcaption>
							<h4><span>Suites</span></h4>
						</figcaption>
					</figure>
				</li>
				<li class="item col-xs-6 col-md-3 rooms">
					<figure>
						<img src="/img/galeria/3007a.jpg" alt="11"/>
						<a href="/img/galeria/3007a.jpg" class="more-details" data-title="Suites">Ver</a>
						<figcaption>
							<h4><span>Suites</span></h4>
						</figcaption>
					</figure>
				</li>
				<li class="item col-xs-6 col-md-3 rooms">
					<figure>
						<img src="/img/galeria/3007b.jpg" alt="11"/>
						<a href="/img/galeria/3007b.jpg" class="more-details" data-title="Suites">Ver</a>
						<figcaption>
							<h4><span>Suites</span></h4>
						</figcaption>
					</figure>
				</li>
				<li class="item col-xs-6 col-md-3 rooms">
					<figure>
						<img src="/img/galeria/3007c.jpg" alt="11"/>
						<a href="/img/galeria/3007c.jpg" class="more-details" data-title="Suites">Ver</a>
						<figcaption>
							<h4><span>Suites</span></h4>
						</figcaption>
					</figure>
				</li>
				<li class="item col-xs-6 col-md-3 rooms">
					<figure>
						<img src="/img/galeria/4006a.jpg" alt="11"/>
						<a href="/img/galeria/4006a.jpg" class="more-details" data-title="Suites">Ver</a>
						<figcaption>
							<h4><span>Suites</span></h4>
						</figcaption>
					</figure>
				</li>
				<li class="item col-xs-6 col-md-3 rooms">
					<figure>
						<img src="/img/galeria/4006b.jpg" alt="11"/>
						<a href="/img/galeria/4006b.jpg" class="more-details" data-title="Suites">Ver</a>
						<figcaption>
							<h4><span>Suites</span></h4>
						</figcaption>
					</figure>
				</li>
				<li class="item col-xs-6 col-md-3 rooms">
					<figure>
						<img src="/img/galeria/4006c.jpg" alt="11"/>
						<a href="/img/galeria/4006c.jpg" class="more-details" data-title="Suites">Ver</a>
						<figcaption>
							<h4><span>Suites</span></h4>
						</figcaption>
					</figure>
				</li>


				<li class="item col-xs-6 col-md-3 near">
					<figure>
						<img src="/img/galeria/estanque1.jpg" alt="11"/>
						<a href="/img/galeria/estanque1.jpg" class="more-details" data-title="Estanque">Ver</a>
						<figcaption>
							<h4><span>Estanque</span></h4>
						</figcaption>
					</figure>
				</li>
				<li class="item col-xs-6 col-md-3 near">
					<figure>
						<img src="/img/galeria/estanque2.jpg" alt="11"/>
						<a href="/img/galeria/estanque2.jpg" class="more-details" data-title="Estanque">Ver</a>
						<figcaption>
							<h4><span>Estanque</span></h4>
						</figcaption>
					</figure>
				</li>
				<li class="item col-xs-6 col-md-3 near">
					<figure>
						<img src="/img/galeria/estanque3.jpg" alt="11"/>
						<a href="/img/galeria/estanque3.jpg" class="more-details" data-title="Estanque">Ver</a>
						<figcaption>
							<h4><span>Estanque</span></h4>
						</figcaption>
					</figure>
				</li>
				<li class="item col-xs-6 col-md-3 near">
					<figure>
						<img src="/img/galeria/estanque4.jpg" alt="11"/>
						<a href="/img/galeria/estanque4.jpg" class="more-details" data-title="Estanque">Ver</a>
						<figcaption>
							<h4><span>Estanque</span></h4>
						</figcaption>
					</figure>
				</li>
				<li class="item col-xs-6 col-md-3 near">
					<figure>
						<img src="/img/galeria/estanque5.jpg" alt="11"/>
						<a href="/img/galeria/estanque5.jpg" class="more-details" data-title="Estanque">Ver</a>
						<figcaption>
							<h4><span>Estanque</span></h4>
						</figcaption>
					</figure>
				</li>

			</ul>

		</div>
	</div>
	<!-- End of Gallery -->

	<!-- Buy Theme -->
	<div id="buy-theme">
		<div class="inner-container container">
			<div class="title">¿Tienes alguna duda sobre <span>Pacifika</span>?</div>
			<a href="/contactanos" class="btn btn-secondary">Contactanos</a>
		</div>
	</div>
	<!-- End of Buy Theme -->
	<?php echo $this->element('footer');?>

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
