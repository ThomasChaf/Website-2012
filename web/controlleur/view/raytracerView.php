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
					<img src="images/rt-scene-victorieuse.jpg" alt="Scene qui termina deuxième du concour epitech boulon" width="100%" />
				</li>
				<li class="anim-f1">
					<img src="images/rt-scene-chateau.jpg" width="100%" alt="Logos de fruitions"/>
				</li>
				<li class="anim-f2">
					<img src="images/rt-scene-textures.jpg" width="100%" alt="Logos d'epitech"/>
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
	<h1><span class="left"></span>Raytracer<span class="right"></span></h1>
	<p>Projet réalisé en deux mois en groupe de 5</p>
	<p>Le raytracing est une technique qui permet par le calcul de dessiner des images de synthèses réalistes.</p>
	<div class="row">
		<div class="col-md-4">
			<h2>Objets raytracés</h2>
			<ul>
				<li>Sphère</li>
				<li>Cylindre</li>
				<li>Cone</li>
				<li>Plan</li>
				<li>Tore</li>
				<li>Cube trouée</li>
				<li>Objets négatifs</li>
			</ul>
		</div>
		<div class="col-md-4">
			<h2>Effets appliqués</h2>
			<ul>
				<li>Ombres</li>
				<li>Réflexion</li>
				<li>Transparence</li>
				<li>Lumière diffuse</li>
				<li>Lumière speculaire</li>
				<li>Textures</li>
			</ul>
		</div>
		<div class="col-md-4">
			<h2>Autour du projet</h2>
			<ul>
				<li>Calcul d'image en cluster</li>
				<li>Importation d'images pour les textures</li>
				<li>Exportation d'images</li>
				<li>Cell-Shading</li>
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
