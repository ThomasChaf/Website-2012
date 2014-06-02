<?php
$this->addCSS("slider.css");
$this->addCSS("accueil.css");
$this->begin();
?>
<div class="row baner description">
	Je m'appelle Thomas, j'ai 20 ans.<br>
	Voici mes projets.
</div>
<hr class="container">
<section class="container">
	<div class="row jsSlider">
		<div class="col-md-1 col-md-offset-2">
			<button type="button" class="btn btn-lg glyphicon glyphicon-chevron-left"></button>
		</div>
		<div class="col-md-6 border mask white">
			<ul>
				<li class="anim-f0">
					<a href=""> <img src="images/baniereEpitech.jpg" width="100%" height="300px" alt="Logos d'epitech"/></a>
				</li>
				<li class="anim-f1">
					<a href=""> <img src="images/fruition.png" width="100%" height="300px" alt="Logos de fruitions"/> </a>
				</li>
				<li class="anim-f2">
					<a href="raytracer"> <img src="images/rt-scene-victorieuse.jpg" alt="Scene qui termina deuxième du concour epitech boulon" width="100%" height="300px"/> </a>
				</li>
			</ul>
			<div class="sliderBar"></div>
		</div>
		<div class="col-md-1">
			<button type="button" class="btn btn-lg glyphicon glyphicon-chevron-right"></button>
		</div>
	</div>
</section>
<hr class="container">
<section class="row baner">
	<ul class="social">
		<a href="https://www.facebook.com/thomas.chafiol.1" target="_blank">
			<i class="fa fa-facebook"></i>
		</a>
		<a href="https://twitter.com/ThomasChaf" target="_blank">
			<i class="fa fa-twitter"></i>
		</a>
		<a href="https://www.linkedin.com/profile/view?id=313822159" target="_blank">
			<i class="fa fa-linkedin"></i>
		</a>
	</ul>
</section>
<script type="text/javascript" src="script/slider.js" ></script>
<script type="text/javascript" >
jQuery(document).ready(function() {
	var slider = new Slider();
	slider.start();
});
</script>
<?php
$this->footer();
