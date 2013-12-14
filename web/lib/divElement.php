<?php
include_once 'htmlElement.php';

class divElement extends htmlElement {
	public function __construct($body) {
		$this->setTagName("div");
		$this->setBody($body);
	}
}