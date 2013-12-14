<?php
class htmlElement
{
	private $tagName;
	
	private $attributs = array();

	private $class = array();

	private $id = null;
	
	private $body;

	private function begin() {
		$string = "<" . $this->tagName;
		if ($this->id)
			$string .= " id=\"" . $this->id . "\" ";
		if ($this->class) {
			$string .= " class=\"";
			$separator = "";
			foreach ($this->class as $className) {
				$string .= $separator . $className;
				$separator = " ";
			}
			$string .= "\"";
		}
		foreach ($this->attributs as $key => $val)
			$string .= " " . $key . "=\"" . $val . "\" ";
		$string .= ">";
		return $string;
	}
	
	private function end() {
		return "</" . $this->tagName . ">";
	}
	
	public function __construct($body = "") {
		$this->body = $body;
	}
	
	public function show() {
		echo $this->tagName . "<br>";
		echo $this->body . "<br>";
	}
	
	public function __toString() {
		$string = $this->begin();
		$string .= $this->body;
		$string .= $this->end();
		return $string;
	}

	public function setTagName($name) {
		$this->tagName = $name;
	}
	
	public function setBody($body) {
		$this->body = $body;
	}
	
	public function getTagName() {
		return $this->tagName;
	}
	
	public function addClass($class) {
		$this->class[] = $class;
	}
	
	public function set($attr, $value) {
		if ($attr == "id")
			$this->id = $value;
		$this->attributs[$attr] = $value;
	}
	
	public function start() {
		echo $this->begin();
	}
	
	public function finish() {
		echo $this->end();
	}
};