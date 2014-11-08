<?php
// ****************************************************************************
//                                                                            *
//                                 NAVBAR PHP                                 *
//                                                                            *
// Created by Thomas Chafiol  -  thomaschaf@gmail.com  -  30  /  09  /  2014  *
// ****************************************************************************
?>
<section id="mini-navbar" class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">

    <div class="navbar-header">
      <a class="navbar-brand" href=<?php echo $this->link("home") ?> >Thomas Chafiol</a>
    </div>

    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a href=<?php echo $this->link("about") ?> ><?php echo $this->tr->_("about") ?></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Projects<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class="dropdown-header">A Epitech</li>
            <li><a href=<?php echo $this->link("raytracer") ?> >Raytracer</a></li>
            <li><a href=<?php echo $this->link("shell42") ?>>42sh</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">En dehors de l'école</li>
            <!-- <li><a href="modulary">Modulary</a></li> -->
            <li><a href=<?php echo $this->link("colorPicker") ?> >Colorpicker</a></li>
          </ul>
        </li>
        <!-- <li><a href="voyages">Voyages</a></li> -->
      </ul>
    </div> <!--/.navbar-collapse -->

    <div class="language" value="English">
      <div>
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="glyphicon glyphicon-flag"></i>
          <span><?php echo $this->tr->getLanguage() ?></span>
          <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li class=<?php echo ($this->tr->shortLanguage == "us" ? "active" : "") ?> >
            <a href=<?php echo ("/us/" . $this->request) ?> ><img src="/images/us.png" /></a>
          </li>
          <li class="divider"></li>
          <li class=<?php echo ($this->tr->shortLanguage == "en" ? "active" : "") ?> >
            <a href=<?php echo ("/en/" . $this->request) ?> ><img src="/images/en.png" /></a>
          </li>
          <li class="divider"></li>
          <li class=<?php echo ($this->tr->shortLanguage == "fr" ? "active" : "") ?> >
            <a href=<?php echo ("/fr/" . $this->request) ?> ><img src="/images/fr.png"/></a>
          </li>
        </ul>
      </div>
    </div>

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>

  </div>
</section>
<div class="margin-header"></div><!-- ./margin -->
