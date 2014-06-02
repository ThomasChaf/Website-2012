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
		<link href='style/font-awesome.min.css' rel='stylesheet' type='text/css'>
		<?php foreach ($this->_cssFile as $cssFile) {
			echo "<link href=\"style/" . $cssFile . "\" rel=\"stylesheet\">";
		} ?>
		<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
		<link href='style/index.css' rel="stylesheet" type="text/css">
		<link href='style/footer.css' rel="stylesheet" type="text/css">

		<script type="text/javascript" src="script/jQuery.js"></script>
	</head>
	<body bgcolor=#ddd>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
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
							<li><a href="about">A propos</a></li>
			  			<li class="dropdown">
			  				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Projects<b class="caret"></b></a>
			  				<ul class="dropdown-menu">
			  					<li class="dropdown-header">A Epitech</li>
			  					<li><a href="raytracer">Raytracer</a></li>
			  					<li><a href="shell42">42sh</a></li>
			  					<li class="divider"></li>
			  					<li class="dropdown-header">En dehors de l'école</li>
			  					<li><a href="colorPicker">Colorpicker</a></li>
			  					<li><a href="codinGame">CodinGame</a></li>
			  				</ul>
				        </li>
				    </ul>
				</div> <!--/.navbar-collapse -->
			</div>
		</div>
		<div class="margin-header"></div><!-- ./margin -->
