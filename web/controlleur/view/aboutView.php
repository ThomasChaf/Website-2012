<?php 
$this->addCSS("progressBar.css");
$this->begin();
?>
<div id=jumbotron>
	<a href="https://docs.google.com/document/d/1Qsd-qqYeOvV9_5eAwHxMfJCa2-Cblw9MQiCl2Psxt1E/edit" target="_blank">Apercu de mon CV</a>
	<h2>Languages pratiquées</h2>
	<div class="row">
		<div class="col-md-2">
			<div class="meter animate center">
				<span style="height: 80%"><span></span></span>
			</div>
			<p class="t-center">C</p>
		</div>
		<div class="col-md-2">
			<div class="meter animate center">
				<span style="height: 80%"><span></span></span>
			</div>
			<p class="t-center">Php</p>
		</div>
		<div class="col-md-2">
			<div class="meter animate center">
				<span style="height: 80%"><span></span></span>
			</div>
			<p class="t-center">Javascript</p>
		</div>
		<div class="col-md-2">
			<div class="meter animate center">
				<span style="height: 70%"><span></span></span>
			</div>
			<p class="t-center">Python</p>
		</div>
		<div class="col-md-2">
			<div class="meter animate center">
				<span style="height: 20%"><span></span></span>
			</div>
			<p class="t-center">C++</p>
		</div>
	</div>
	<h2>Autres compétences</h2>
	<div class="row">
		<div class="col-md-1">
			<div class="meter orange animate center">
				<span style="height: 90%"><span></span></span>
			</div>
			<p class="t-center">Html5 / CSS3</p>
		</div>
		<div class="col-md-1">
			<div class="meter orange animate center">
				<span style="height: 90%"><span></span></span>
			</div>
			<p class="t-center">MVC</p>
		</div>
		<div class="col-md-1">
			<div class="meter orange animate center">
				<span style="height: 70%"><span></span></span>
			</div>
			<p class="t-center">Ajax</p>
		</div>
		<div class="col-md-1">
			<div class="meter orange animate center">
				<span style="height: 70%"><span></span></span>
			</div>
			<p class="t-center">SQL</p>
		</div>
		<div class="col-md-1">
			<div class="meter orange animate center">
				<span style="height: 60%"><span></span></span>
			</div>
			<p class="t-center">Système unix</p>
		</div>
		<div class="col-md-1">
			<div class="meter orange animate center">
				<span style="height: 50%"><span></span></span>
			</div>
			<p class="t-center">Qt</p>
		</div>
	</div>
</div>
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
		});
</script>


<?php
$this->footer();