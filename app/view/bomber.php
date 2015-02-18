<?php
/**
 *  @file   bomber.php
 *
 *  @author Thomas Chafiol <thomaschaf@gmail.com>
 *  @date   17 / 02 / 2015
 */

$this->css("navbar");
$this->css("bomber");
$this->render("header");
$this->render("navbar");
?>
<div class="fluid-container bomber big">
	<canvas id="bomber">
	</canvas>
	<div id="endGame" class="row endGame">
		<div class="col-sm-offset-4 col-sm-4">
			<p></p>
			<button class="btn btn-default" >Play again!</button>
		</div>
	</div>
</div>

<?php
$this->javascript("bomber/case");
$this->javascript("bomber/end_game");
$this->javascript("bomber/bomber_map");
$this->javascript("bomber/bomber");
$this->render("footer");
?>
