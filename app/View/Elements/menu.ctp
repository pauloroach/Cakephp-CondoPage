<?php
	if(!isset($current)) {
		$current = "inicio";
	}
 ?>
	<!-- Top Header -->
	<div id="top-header">
		<div class="inner-container container">
			<!-- Contact Info -->
			<ul class="contact-info list-inline">
				<li><i class="fa fa-phone"></i>669 9814872</li>
				<li><i class="fa fa-envelope-o"></i>info@pacifikaownersclub.com</li>
			</ul>

			<!-- Language Switcher -->
      <!--
            <select id="language-switcher">
                <option value="1">English</option>
                <option value="2">Spanish</option>
            </select>
          -->
            <!-- End of Language Switcher -->
		</div>
	</div>
	<!-- End of Top Header -->

	<!-- Main Header -->
	<header id="main-header">
		<div class="inner-container container">
			<div class="left-sec col-sm-4 col-md-2 clearfix">
				<!-- Top Logo -->
				<div id="top-logo">
						<div class="visible-xs">
							<img src="/img/logo-header.png" width="150" style="margin:14px -11px 0px 0px; float:left; float:left;">
						</div>
						<div class="visible-sm visible-md visible-lg">
							<img src="/img/logo-header.png" id="main-logo">
						</div>


					<!--<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>-->
				</div>
			</div>
			<div class="right-sec col-sm-8 col-md-10 clearfix">

				<!-- Book Now -->
				<a href="/users/account" class="book-now-btn btn btn-default btn-sm">Mi Cuenta</a>

				<!-- Main Menu -->
				<nav id="main-menu">
					<ul class="list-inline">
						<li <?php if($current == 'inicio') { echo 'class="active"';}?>><a href="/">Inicio</a></li>
						<li <?php if($current == 'habitaciones') { echo 'class="active"';}?>><a href="/suites">Suites</a></li>
						<li <?php if($current == 'contactanos') { echo 'class="active"';}?> ><a href="/contactanos">Contactanos</a></li>

					</ul>
				</nav>

				<!-- Menu Handel -->
				<div id="main-menu-handle" class="hidden-md hidden-lg"><i class="fa fa-bars"></i></div>
			</div>
		</div>
		<div id="mobile-menu-container" class="hidden-md hidden-lg"></div>
	</header>
	<!-- End of Main Header -->
