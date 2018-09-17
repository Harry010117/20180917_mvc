<?php
namespace App\Core;

class Table {

	static public $instance;

	function __construct () {
		$prefix = 'app_';
		$this->board = $prefix."board";
	}

	static public function init () {
		self::$instance = new Table();
	}

	static public function getInstance () {
		return self::$instance;
	}
}
