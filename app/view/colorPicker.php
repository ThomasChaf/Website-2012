<?php
// ****************************************************************************
//                                                                            *
//                              COLORPICKER PHP                               *
//                                                                            *
// Created by Thomas Chafiol  -  thomaschaf@gmail.com  -  26  /  11  /  2013  *
// ****************************************************************************

$this->css("colorPicker");
$this->css("navbar");
$this->javascript("image");
$this->javascript("colorPicker");
$this->render("header");
$this->render("navbar");
?>
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

<script type="text/javascript">

jQuery(document).ready(function() {
  document.color = new ColorPicker(document.getElementById("pixMap"),
                                    document.getElementById("picker"),
                                    document.getElementById("color"),
                                    jQuery("#input input"));
  document.color.gradient(document.color.imageGradient, 255, 0, 0);
  document.color.pixMap(document.color.imagePicker);
  document.color.fill(255, 0, 0);
  document.color.putImageData();
})

jQuery("canvas#pixMap").click(function(e) {
  var clr = document.color.imagePicker.getRGBPixel(e.pageX - $(this).offset().left, e.pageY - $(this).offset().top);
  document.color.gradient(document.color.imageGradient, clr[0], clr[1], clr[2]);
  document.color.fill(clr[0], clr[1], clr[2]);
  document.color.imageColor.putImageData(0, 0);
  document.color.imageGradient.putImageData(0, 0);
})

jQuery("#input input").change(function(evt) {
  if (evt.target.id == "hh") {
    var newColor = document.color.colorInRgb(evt.target.value);
  } else {
    var newColor = [document.getElementById("rr").value,
                    document.getElementById("gg").value,
                    document.getElementById("bb").value];
  }
  document.color.gradient(document.color.imageGradient, newColor[0], newColor[1], newColor[2]);
  document.color.fill(newColor[0], newColor[1], newColor[2]);
  document.color.putImageData();
})

jQuery("canvas#picker").click(function(e) {
  var clr = document.color.imageGradient.getRGBPixel(e.pageX - $(this).offset().left, e.pageY - $(this).offset().top);
  document.color.fill(clr[0], clr[1], clr[2]);
  document.color.imageColor.putImageData(0, 0);
})

</script>
<?php
$this->render("footer");
?>
