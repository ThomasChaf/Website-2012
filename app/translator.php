<?php
/**
 *  @file   Translator php
 *
 *  @author Thomas Chafiol <thomaschaf@gmail.com>
 *  @date   29 / 09 / 2014
 */

class Translator
{
	private $TO_PRINT = array("en" => "English", "fr" => "Francais", "us" => "American");

	private $TO_FILE  = array("en" => "en", "fr" => "fr", "us" => "en");

	function __construct() {
		$this->shortLanguage = False;
		$this->datas = False;
		$this->language = "Undefined";
	}

	function set($language, $request) {
		$jsonData = array();

		$this->shortLanguage = $language;
		$this->language = $this->TO_PRINT[$language];
		$jsonNavbar = file_get_contents("i18n/" . $this->TO_FILE[$language] . "/navbar.json");

		$file = "i18n/" . $this->TO_FILE[$language] . "/" . $request . ".json";
		if (file_exists($file))
			$jsonData = json_decode(str_replace("\n", "", file_get_contents($file)), true);

		$this->datas = array_merge(json_decode($jsonNavbar, true), $jsonData);
	}

	function _($name) {
		if (!$this->datas) {
			$json_navbar = file_get_contents("i18n/en/navbar.json");
			$this->datas = json_decode($json_navbar, true);
		}
		return ($this->datas[$name]);
	}

	function getLanguage() {
		return ($this->language);
	}
};

?>
