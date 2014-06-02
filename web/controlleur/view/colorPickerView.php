<?php
$this->begin();
?>
<link href='style/colorPicker.css' rel="stylesheet" type="text/css">
<hr class="container">
<section class="container">
	<div class="row">
		<div class="col-md-5">
			<div class="picker border">
				<canvas id="picker" width="500px" height="480px"></canvas>
			</div>
		</div>
		<div class="col-md-2 col-md-offset-1">
			<div class="pixmap border">
				<canvas id="pixMap" width="150px" height="480px"></canvas>
			</div>
		</div>
		<div class="col-md-3">
			<div id="input" class="input">
				<div id="hexa" class="border"><strong>HEXA</strong><input id="hh" type="text" class="form-control"></input></div>
				<div id="red" class="border"><strong>RED</strong><input id="rr" type="text" class="form-control"></input></div>
				<div id="green" class="border"><strong>GREEN</strong><input id="gg" type="text" class="form-control"></input></div>
				<div id="blue" class="border"><strong>BLUE</strong><input id="bb" type="text" class="form-control"></input></div>
			</div>
			<canvas id="color" class="border"></canvas>
		</div>
	</div>
</section>
<hr class="container">

<script type="text/javascript" src="script/image.js"></script>
<script type="text/javascript" src="script/colorPicker.js"></script>
<script type="text/javascript">
var color = new ColorPicker(document.getElementById("pixMap"),
							document.getElementById("picker"),
							document.getElementById("color"),
							jQuery("#input input"));

jQuery(document).ready(function(){
	color.gradient(color.imageGradient, 255, 0, 0);
	color.pixMap(color.imagePicker);
	color.fill(255, 0, 0);
	color.putImageData();
})

jQuery("canvas#pixMap").click(function(evt) {
	var clr = color.imagePicker.getRGBPixel(evt.offsetX, evt.offsetY);
	color.gradient(color.imageGradient, clr[0], clr[1], clr[2]);
	color.fill(clr[0], clr[1], clr[2]);
	color.imageColor.putImageData(0, 0);
	color.imageGradient.putImageData(0, 0);
})

jQuery("#input input").change(function(evt) {
	if (evt.target.id == "hh") {
		var newColor = color.colorInRgb(evt.target.value);
	} else {
		var newColor = [document.getElementById("rr").value,
		                document.getElementById("gg").value,
		                document.getElementById("bb").value];
	}
	color.gradient(color.imageGradient, newColor[0], newColor[1], newColor[2]);
	color.fill(newColor[0], newColor[1], newColor[2]);
	color.putImageData();
})

jQuery("canvas#picker").click(function(evt) {
	var clr = color.imageGradient.getRGBPixel(evt.offsetX, evt.offsetY);
	color.fill(clr[0], clr[1], clr[2]);
	color.imageColor.putImageData(0, 0);
})

</script>
<?php
$this->footer();
?>
