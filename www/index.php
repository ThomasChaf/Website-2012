<?php
require '../app/controller.php';
$controlleur = new Controller();
$controlleur->parseUrl();
$controlleur->process();
?>
