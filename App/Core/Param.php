<?php
namespace App\Core;

class Param {

	static public $instance;

	function __construct () {
		$prefix = 'app_';
		$this->board = $prefix."board";
	}

	static public function init () {
		self::$instance = new Param();
	}

	static public function getInstance () {
		return self::$instance;
	}
}
