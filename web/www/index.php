<?php
require '../controlleur/controller.php';
$controlleur = new controlleur($_SERVER['REQUEST_URI']);
$controlleur->start();
?>	
