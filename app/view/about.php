<?php
/**
 *  @file   About php
 *
 *  @author Thomas Chafiol <thomaschaf@gmail.com>
 *  @date   23 / 11 / 2013
 */

$this->css("progressBar");
$this->css("about");
$this->css("navbar");
$this->render("header");
$this->render("navbar");
?>
<div class="row">
	<p class="container resume">
		<?php echo $this->tr->_("resume1") ?>
		<br><br>
		<?php echo $this->tr->_("resume2") ?>
		<br><br>
		<?php echo $this->tr->_("resume3") ?>
	</p>
</div>
<hr class="container">
<section class="row cv">
	<a href=<?php echo $this->config["link"]["resume"] ?> target="_blank">
		<i class="fa fa-download"></i>
		<?php echo $this->tr->_("overview") ?>
	</a>
</section>
<hr class="container">
<section class="competences container">
	<h2><?php echo $this->tr->_("skills") ?></h2>
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
	<h2><?php echo $this->tr->_("about_me") ?></h2>
	<div class="row">
		<div class="col-md-4 right">
			<div>
				<h3><?php echo $this->tr->_("name") ?></h3>
				<p>Thomas Chafiol</p>
			</div>
			<div>
				<h3><?php echo $this->tr->_("birthday") ?></h3>
				<p>02 / 03 / 1994</p>
			</div>
		</div>
		<figure class="col-md-4 self-picture">
			<img src="/images/thomas.jpg" width="230px"/>
		</figure>
		<div class="col-md-4 left">
			<div>
				<h3><?php echo $this->tr->_("residence") ?></h3>
				<p>Montpellier</p>
			</div>
			<div>
				<h3><?php echo $this->tr->_("hobbies") ?></h3>
				<p><?php echo $this->tr->_("sports") ?></p>
			</div>
		</div>
	</div>
</section>
<hr class="container">
<section class="competences container">
	<h2><?php echo $this->tr->_("other_skills") ?></h2>
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
		ctx.strokeStyle = '#65B5B8';
		ctx.stroke();
	});
});
</script>


<?php
$this->render("footer");
