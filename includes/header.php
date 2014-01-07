<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Food'n'Truck</title>
	<link type="image/x-icon" rel="shortcut icon" href="favicon.ico" />
	<meta name="description" content="Food'n'Truck allows you to search through a great number of type of food a foodtruck in Paris. Your truck found you will be able to order on the website and enjoy the meal of your choice." />
	<link type="text/css" rel="stylesheet" media="screen" href="medias/css/global.css">
	<link type="text/css" rel="stylesheet" media="screen" href="medias/css/login_form.css">
	<link type="text/css" rel="stylesheet" media="screen" href="medias/css/fontello.css">
	<link type="text/css" rel="stylesheet" media="screen" href="medias/js/plugins/leaflet/leaflet.css" />
	<link type="text/css" rel="stylesheet" media="screen" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
	<?php
	foreach($ajout_css as $value) echo '<link type="text/css" rel="stylesheet" media="screen" href="medias/css/' . $value . '" />'."\n";
	?>
	<!--[if lte IE 8]>
	<link rel="stylesheet" href="medias/js/plugins/leaflet/leaflet.ie.css" />
	<![endif]-->
	<script type="text/javascript" src="medias/js/global.js"></script>
	<script type="text/javascript" src="medias/js/plugins/jquery_1-10-1.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<?php
	foreach($ajout_js as $value) echo '<script type="text/javascript" src="medias/js/' . $value . '"></script>'."\n";
	?>
	<script>
	$(function() {
		$( ".datepicker" ).datepicker({
		});
	});
	</script>

</head>
<body>
