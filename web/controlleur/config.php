<?php
class config {
	static $menu = null;
	
	static function getMenu() {
		if (!self::$menu) {
			self::$menu = simplexml_load_file("../controlleur/menu/menu.xml");
		}
		return self::$menu;
	}
}