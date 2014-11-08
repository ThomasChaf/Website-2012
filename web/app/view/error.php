<?php
// ****************************************************************************
//                                                                            *
//                                 ERROR PHP                                  *
//                                                                            *
// Created by Thomas Chafiol  -  thomaschaf@gmail.com  -  24  /  11  /  2013  *
// ****************************************************************************

$this->css("navbar");
$this->render("header");
$this->render("navbar");
?>
<div align="center">
  <img class="erreur404" src="/images/erreur404.png"></img>
  <div class="liens">
    <a href="home">Back to home</a>
  </div>
</div>
<?php $this->render("footer") ?>
