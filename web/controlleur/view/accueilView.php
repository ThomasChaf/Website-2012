<?php
$this->begin();
?>
<div class="container">
	I'm Thomas, a software developer student and this is my web site.
</div>
<div id="slider" class="border">
	<div id="mask">
		<ul>
			<li id="first" class="firstanimation">
				<a href=""> <img src="images/baniereEpitech.jpg" width="100%" height="100%" alt="Cougar"/></a>
				<div class="tooltip"> <h1>Cougar</h1> </div>
			</li>
			<li id="second" class="secondanimation">
				<a href=""> <img src="images/fruition.png" width="60%" height="60%" alt="Lions"/> </a>
				<div class="tooltip"> <h1>Lions</h1> </div>
			</li>
			<li id="third" class="thirdanimation">
				<a href=""> <img src="images/vert.jpg" alt="Snowalker"/> </a>
				<div class="tooltip"> <h1>Snowalker</h1> </div>
			</li>
			<li id="fourth" class="fourthanimation">
				<a href=""> <img src="images/jaune.jpg" alt="Howling"/> </a>
				<div class="tooltip"> <h1>Howling</h1> </div>
			</li>
		</ul>
	</div>  <!-- End Mask -->
	<div class="progress-bar"></div>  <!-- Progress Bar -->
</div>  <!-- End Slider Container -->
<?php   
$this->footer();