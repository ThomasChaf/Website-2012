<?php
// ****************************************************************************
//                                                                            *
//                                  HOME PHP                                  *
//                                                                            *
// Created by Thomas Chafiol  -  thomaschaf@gmail.com  -  21  /  11  /  2013  *
// ****************************************************************************

$this->css("slider");
$this->css("home");
$this->css("navbar");
$this->javascript("slider");
$this->render("header");
?>
<!-- HEADER -->
<section id="big-navbar" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid baner">

    <!-- FORK ME -->
    <a class="github" href=<?php echo $this->config["link"]["github"] ?> target="_blank">
      <img src="/images/github.png" alt="Fork me on GitHub">
    </a>
    <!-- DESCRIPTION -->
    <p class="row description">
      <span><?php echo $this->tr->_("description") ?></span>
    </p>

    <!-- MOBILE BUTTON -->
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>

    <!-- NAVBAR -->
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a href=<?php echo $this->config["link"]["resume"] ?>  target="_blank">
          <i class="fa fa-book"></i> <?php echo $this->tr->_("resume") ?></a>
        </li>
        <li><a href="#projects"><i class="fa fa-user"></i> <?php echo $this->tr->_("projects") ?></a></li>
        <li><a href=<?php $this->link("about"); ?> ><i class="fa fa-user"></i> <?php echo $this->tr->_("about_me") ?></a></li>
      </ul>
    </div>

    <!-- SOCIAL -->
    <div class="social navbar-collapse collapse">
      <ul>
        <a href=<?php echo $this->config["link"]["facebook"] ?> target="_blank">
          <i class="fa fa-facebook"></i>
        </a>
        <a href=<?php echo $this->config["link"]["twitter"] ?> target="_blank">
          <i class="fa fa-twitter"></i>
        </a>
        <a href=<?php echo $this->config["link"]["linkedin"] ?> target="_blank">
          <i class="fa fa-linkedin"></i>
        </a>
      </ul>
    </div>

  </div>
</section>
<?php $this->render("navbar"); ?>
<!-- SLIDER -->
<section id="worked" class="container">
  <h2><?php echo $this->tr->_("worked_with") ?></h2>
  <div class="row jsSlider">
    <div class="col-md-1 col-md-offset-2">
      <button type="button" class="btn btn-lg glyphicon glyphicon-chevron-left"></button>
    </div>
    <div class="col-md-6 border mask">
      <ul>
        <li class="anim-f0">
          <img src="/images/baniereEpitech.jpg" width="100%" height="300px" alt="Logos d'epitech"/>
        </li>
        <li class="anim-f1">
          <img src="/images/fruition.png" width="100%" height="300px" alt="Logos de fruitions"/>
        </li>
        <li class="anim-f2">
          <img src="/images/humanTalks.jpg" alt="Logo des humans talks" width="100%" height="300px"/>
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
<section id="projects" class="container">
  <h2><?php echo $this->tr->_("here_projects") ?></h2>
  <div class="row">
    <div class="col-md-6">
      <a href=<?php $this->link("raytracer"); ?> >
        <img class="border" src="/images/rt-scene-victorieuse.jpg" width="100%" height="300px"/>
      </a>
    </div>
    <div class="col-md-6">
      <a href=<?php $this->link("colorPicker"); ?> >
        <img class="border" src="/images/colorPicker.png" width="100%" height="300px" />
      </a>
    </div>
  </div>
</section>
<hr class="container">
<script type="text/javascript" >
jQuery("#mini-navbar").hide();
document.top = true;

jQuery(window).scroll(function() {
  if (document.top && window.pageYOffset > jQuery("#worked").offset().top - 100) {
    jQuery("#mini-navbar").show();
    document.top = false;
  } else if (!document.top && window.pageYOffset < jQuery("#worked").offset().top - 100) {
    jQuery("#mini-navbar").hide();
    document.top = true;
  }
});

jQuery(document).ready(function() {
  var slider = new Slider();
  slider.start();
});
</script>
<?php
$this->render("footer");
