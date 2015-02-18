<?php
/**
 *  @file   2048 php
 *
 *  @brief  @brief
 *
 *  @author Thomas Chafiol <thomaschaf@gmail.com>
 *  @date   24 / 11 / 2014
 */

$this->css("navbar");
$this->css("2048");
$this->css("project");
$this->javascript("slider");
$this->render("header");
$this->render("navbar");
?>

<hr class="container">
<section class="container project">
	<h1><span class="left"></span>2048<span class="right"></span></h1>
	<p>Projet réalisé comme exemple à la library <a href=<?php $this->link("modulary"); ?> >Modulary</a></p>
	<div class="deuxk48 col-md-8 col-md-offset-2">
		<img src="/images/2048.png" width="100%" height="100%" />
		<span>
			<a href="/download/2048.dmg"><i class="fa fa-download"></i>&nbsp;&nbsp;&nbsp;Download</a>
		</span>
	</div>
</section>
<hr class="container">

<?php
$this->render("footer");
?>
