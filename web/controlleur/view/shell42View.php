<?php
$this->addCSS("slider.css");
$this->addCSS("project.css");
$this->begin();
?>
<hr class="container">
<section class="container">
	<div class="row jsSlider">
		<div class="col-md-1 col-md-offset-2">
			<button type="button" class="btn btn-lg glyphicon glyphicon-chevron-left"></button>
		</div>
		<div class="col-md-6 border mask">
			<ul class="white">
				<li class="anim-f0">
					<a href=""> <img src="images/baniereEpitech.jpg" width="100%" height="100%" alt="Logos d'epitech"/></a>
				</li>
				<li class="anim-f1">
					<a href=""> <img src="images/fruition.png" width="100%" height="100%" alt="Logos de fruitions"/> </a>
				</li>
				<li class="anim-f2">
					<a href=""> <img src="images/rt-scene-victorieuse.jpg" alt="Scene qui termina deuxième du concour epitech boulon" width="100%" height="100%"/> </a>
				</li>
			</ul>
			<div class="sliderBar"></div>  <!-- Progress Bar -->
		</div>
		<div class="col-md-1">
			<button type="button" class="btn btn-lg glyphicon glyphicon-chevron-right"></button>
		</div>
	</div>
</section>
<hr class="container">
<section class="container project">
	<h1><span class="left"></span>42 sh<span class="right"></span></h1>
	<p>Projet réalisé en deux mois en groupe de 5</p>
	<p>Le 42sh est un projet qui permet de recoder un shell unix en utilisant un minimum de fonction systeme. Notre shell est codé suivant le modèle du shell tcsh</p>
	<div class="row commandes">
		<div class="col-md-4">
			<h2>Commandes</h2>
			<ul>
				<li>Pipes <span>ls | ls | ls | . </span></li>
				<li>Redirections commandes-fichier/flux <span>ls >> file ; cat << EOL </span></li>
				<li>Redirections exotiques <span>>> file ls ; << EOL cat </span></li>
				<li>Séparateurs <span>ls && error || echo "error"</span></li>
			</ul>
		</div>
		<div class="col-md-4">
			<h2>Built-in</h2>
				<ul>
					<li>cd <span>cd ~ && cd /home</span></li>
					<li>env, setenv, unsetenv</li>
					<li>echo</li>
					<li>exit <span>exit 42</span></li>
				</ul>
			</div>
		<div class="col-md-4">
			<h2>Autour du projet</h2>
				<ul>
					<li>Edition de ligne en termcaps like emacs</li>
					<li>Historique</li>
					<li>Auto-complétion (stokage n-aire en optimisation)</li>
					<li>Globing</li>
					<li>Parenthèses partielles</li>
					<li>Variables locales d'environnement</li>
					<li>Configuration à partir d'un fichier (like .tcsh)</li>
					<li>Utilisation d'un garbage collector</li>
				</ul>
			</div>
	</div>
</section>
<hr class="container">
<script type="text/javascript" src="script/slider.js" ></script>
<script type="text/javascript" >
jQuery(document).ready(function() {
	var slider = new Slider();
	slider.start();
});
</script>
<?php
$this->footer();
