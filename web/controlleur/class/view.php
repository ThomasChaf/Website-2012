<?php

class view {

	public $_path;
	
	public function __construct($path) {
		$this->_path = $path;
	}

	public function begin() {
		include "../controlleur/menu/menu.php";
	}

	public function show() {
		require_once "../controlleur/view/" . $this->_path;
	}
	
	public function footer() {
		include "../controlleur/menu/footer.php";
	}
}