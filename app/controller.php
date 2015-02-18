<?php
/**
 *  @file   Controller php
 *
 *  @brief  @brief
 *
 *  @author Thomas Chafiol <thomaschaf@gmail.com>
 *  @date   21 / 11 / 2013
 */

include "../app/translator.php";

/**
 *	@class			Controller
 *  @brief      Create the view from the request uri.
 *							Manage the css and the javascript.
 */
class Controller
{
	function __construct() {
		$this->config = parse_ini_file("../app/config/config.php");
		$this->_javascript = array();
		$this->_css = array();
		$this->_css["vendor"] = array();
		$this->_css["style"]  = array();
		$this->tr = new Translator();
	}

	public function link($relativeLink) {
		$language = ($this->tr->shortLanguage ? $this->tr->shortLanguage : "en");
		echo("/" . $language . "/" . $relativeLink);
	}

	public function path($relativePath) {
		return ("http://" . $_SERVER["SERVER_NAME"] . $this->config["home"] . $relativePath);
	}

	public function javascript($javascript) {
		if (file_exists("vendor/" . $javascript . ".js")) {
			$this->_javascript[] = $this->path("vendor/" . $javascript . ".js");
		} else {
			$this->_javascript[] = $this->path("javascript/" . $javascript . ".js");
		}
	}

	public function getCss() {
		return array_merge($this->_css["vendor"], $this->_css["style"]);
	}

	public function css($cssFile) {
		if (file_exists("vendor/" . $cssFile . ".css")) {
			$this->_css["vendor"][] = $this->path("vendor/" . $cssFile . ".css");
		} else {
			$this->_css["style"][] = $this->path("style/" . $cssFile . ".css");
		}
	}

	public function render($render) {
		include "../app/view/render/" . $render . ".php";
	}

	public function loadView($view) {
		include "../app/view/" . $view . ".php";
	}

	public function parseUrl() {
		$r = explode("/", substr($_SERVER['REQUEST_URI'], strlen($this->config["home"])));
		if (!isset($r[1]) || !$r[1]) {
			$language = $r[0] ? $r[0] : $this->config["default_language"];
			header('Location: ' . $language . '/' . $this->config["default_URL"]);
			exit(0);
		}
		list($language, $this->request) = $r;
		if (!in_array($language, $this->config["languages"]))
			return ;
		$this->tr->set($language, $this->request);
	}

	public function process() {
		if (!in_array($this->request, $this->config["routes"]) || !$this->tr->shortLanguage) {
			header("HTTP/1.1 404 Not Found");
			$this->request = $this->config["error_404"];
		}
		$this->loadView($this->request);
	}
};
?>
