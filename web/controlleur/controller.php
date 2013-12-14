<?php
include_once "mainControlleur.php";

class controlleur
{
	private  $_url = "index.php";
	
	private  $_methods = "accueil";

	private $_controlleur = null;

	function __construct($url) {
		$this->_url = $url;
		if ($method = substr($url, strlen("/web/"))) {
			$this->_methods = $method;
		}
		$this->_controlleur = new mainControlleur();
	}

	public function getMethods() {
		return $this->_methods;
	}

	public function show() {
		echo "TYPE : controlleur";
		echo $this->_url . "<br>";		
		echo $this->_methods . "<br>";
	}

	public function start() {
		if (method_exists($this->_controlleur, $this->_methods)) {
			$method = $this->_methods;
			$view = $this->_controlleur->$method();
		} else {
			$view = $this->_controlleur->errorView();
		}
		$view->show();
	}
}