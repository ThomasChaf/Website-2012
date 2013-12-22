<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="my personnal web site">
		<meta name="author" content="thomas chafiol">
		<link rel="icon" type="image/png" href="images/favicon.png" />
		<title>Thomas Chafiol</title>
		<!-- Bootstrap core CSS -->
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500' rel='stylesheet' type='text/css'>
		<?php foreach ($this->_cssFile as $cssFile) {
			echo "<link href=\"style/" . $cssFile . "\" rel=\"stylesheet\">";
		} ?>
		<link href="style/bootstrap.css" rel="stylesheet">
		<link href='style/index.css' rel="stylesheet" type="text/css">

		<script type="text/javascript" src="script/jQuery.js"></script>
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="../../assets/js/html5shiv.js"></script>
		<script src="../../assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body bgcolor=#ddd>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container" style="margin-left: 10%">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
			  		</button>
			  		<a class="navbar-brand" href="accueil">Thomas Chafiol</a>
			  	</div>
			  	<div class="navbar-collapse collapse">
			  		<ul class="nav navbar-nav">
			  			<li><a href="about">About</a></li>
			  			<li><a href="contact">Contact</a></li>
			  			<li class="dropdown">
			  				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Projects<b class="caret"></b></a>
			  				<ul class="dropdown-menu">
			  					<li><a href="raytracer">Raytracer</a></li>
			  					<li><a href="42sh">42sh</a></li>
<!-- 
 			  					<li><a href="#">Something else here</a></li>
			  					<li class="divider"></li>
			  					<li class="dropdown-header">Nav header</li>
			  					<li><a href="#">Separated link</a></li>
			  					<li><a href="#">One more separated link</a></li>
 -->
			  				</ul>
				        </li>
				    </ul>
				</div> <!--/.navbar-collapse -->
			</div>
		</div>
	<div id="body" class="jumbotron">