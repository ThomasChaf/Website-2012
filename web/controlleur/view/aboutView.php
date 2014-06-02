<?php
$this->addCSS("progressBar.css");
$this->addCSS("about.css");
$this->begin();
?>
<div class="row">
	<p class="container resume">
		Actuellement pleinement investi dans mes études en informatique, je suis un développeur passionné par ce qui touche au monde de la programmation.
		Mon sérieux me permet de m’adapter et d’être efficace sur des technologies nouvelles.
		<br><br>
		Volontaire et motivé, j’aime aller de l’avant afin de me donner les moyens de réussir.
		J’aime valoriser mon travail, me sentir utile et donner de la valeur à ce que je façonne.
		<br><br>
		Je tire mes plus beaux souvenirs de mes voyages.
		Je suis curieux du monde qui m'entoure, ouvert d’esprit et désireux de tenter de nouvelles expériences.
	</p>
</div>
<hr class="container">
<section class="row cv">
	<a href="https://docs.google.com/document/d/1Qsd-qqYeOvV9_5eAwHxMfJCa2-Cblw9MQiCl2Psxt1E/edit" target="_blank">
		<i class="fa fa-download"></i>
		&nbsp&nbsp
		Apercu de mon CV
	</a>
</section>
<hr class="container">
<section class="competences container">
	<h2>Languages pratiquées</h2>
	<div class="row">
		<div class="col-md-2">
			<span>90%</span>
			<canvas class="canvas-rounded">90</canvas>
			<p class="t-center">C</p>
		</div>
		<div class="col-md-2">
			<span>70%</span>
			<canvas class="canvas-rounded">70</canvas>
			<p class="t-center">Php</p>
		</div>
		<div class="col-md-2">
			<span>60%</span>
			<canvas class="canvas-rounded">60</canvas>
			<p class="t-center">Javascript</p>
		</div>
		<div class="col-md-2">
			<span>70%</span>
			<canvas class="canvas-rounded">70</canvas>
			<p class="t-center">Python</p>
		</div>
		<div class="col-md-2">
			<span>50%</span>
			<canvas class="canvas-rounded">50</canvas>
			<p class="t-center">C++</p>
		</div>
		<div class="col-md-2">
			<span>40%</span>
			<canvas class="canvas-rounded">40</canvas>
			<p class="t-center">Ocaml</p>
		</div>
	</div>
</section>
<hr class="container">
<section class="competences container">
	<h2>A propos de moi</h2>
	<div class="row">
		<div class="col-md-3 col-md-offset-1 right">
			<div>
				<h3>Nom</h3>
				<p>Thomas Chafiol</p>
			</div>
			<div>
				<h3>Anniversaire</h3>
				<p>02 / 03 / 1994</p>
			</div>
		</div>
		<figure class="col-md-4 self-picture">
			<img src="images/thomas.jpg" width="230px"/>
		</figure>
		<div class="col-md-3 left">
			<div>
				<h3>Lieu de résidence</h3>
				<p>Montpellier</p>
			</div>
			<div>
				<h3>Centres d'intérets</h3>
				<p>Sport et voyage</p>
			</div>
		</div>
	</div>
</section>
<hr class="container">
<section class="competences container">
	<h2>Autres compétences</h2>
	<div class="row">
		<div class="col-md-2">
			<span>80%</span>
			<canvas class="canvas-rounded">80</canvas>
			<p class="t-center">Html5 / CSS3</p>
		</div>
		<div class="col-md-2">
			<span>70%</span>
			<canvas class="canvas-rounded">70</canvas>
			<p class="t-center">MVC</p>
		</div>
		<div class="col-md-2">
			<span>70%</span>
			<canvas class="canvas-rounded">70</canvas>
			<p class="t-center">Ajax</p>
		</div>
		<div class="col-md-2">
			<span>70%</span>
			<canvas class="canvas-rounded">70</canvas>
			<p class="t-center">SQL</p>
		</div>
		<div class="col-md-2">
			<span>80%</span>
			<canvas class="canvas-rounded">80</canvas>
			<p class="t-center">Système unix</p>
		</div>
		<div class="col-md-2">
			<span>60%</span>
			<canvas class="canvas-rounded">60</canvas>
			<p class="t-center">Qt</p>
		</div>
	</div>
</section>
<hr class="container">
<script>
jQuery(function() {
	jQuery(".meter > span").each(function() {
		jQuery(this)
			.data("origWidth", jQuery(this).height())
			.height(0)
			.animate({
				height: jQuery(this).data("origWidth")
			}, 1200);
	});
	jQuery(".canvas-rounded").each(function() {
		var ctx=this.getContext("2d");
		ctx.beginPath();
		var max = jQuery(this).text();
		ctx.arc(this.width / 3, this.height / 2, this.width / 5, 0, 2 * Math.PI * max / 100);
    ctx.lineWidth = 7;
    ctx.strokeStyle = '#B8CFDE';
		ctx.stroke();
	});
});
</script>


<?php
$this->footer();
