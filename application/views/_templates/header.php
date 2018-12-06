<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">

	<!--Stylesheet-->
	<link href="<?php echo URL; ?>public/css/MainStyleSheet.css" rel="stylesheet">

	<title>PMML</title>

	<!-- Vue.js -->
	<script src="https://unpkg.com/vue/dist/vue.js"></script>

	<!-- Materialize CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css" rel="stylesheet" />

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<!-- Materialize JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

</head>
<body>
	<div id="app">
		<header class="no-padding">
			<div class="navbar-fixed">
				<nav class="navfeature">
					<div class="container nav-wrapper">
						<a href="/" class="waves-effect waves-light brand-logo">
							<span class="pmml-logo">PMML</span>
						</a>
						<ul id="nav" class="hide-on-med-and-down right">
							<li>
								<a class="navmenu" href="/">Finder</a>
							</li>
							<li>
								<a class="navmenu" href="/about">About</a>
							</li>
							<li>
								<a class="navmenu" href="https://docs.google.com/spreadsheets/d/14pDCMfhYCyTRfsl_RaWa-_viDwsNpGyLSRhHFMH3R1s/edit?usp=sharing">Edit</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="nav-content mobile-tab">
				<ul class="tabs tabs-transparent">
					<li class="tab">
						<a class="active" href="#finder">Finder</a>
					</li>

					<li class="tab">
						<a href="#about">About</a>
					</li>

					<li class="tab">
						<a target="_self" href="https://docs.google.com/spreadsheets/d/14pDCMfhYCyTRfsl_RaWa-_viDwsNpGyLSRhHFMH3R1s/edit?usp=sharing">Edit</a>
					</li>
				</ul>
			</div>
		</header>

		<div class="container">
