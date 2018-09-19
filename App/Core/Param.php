<?php
namespace App\Core;

class Param {
	var $page;
	var $include_file;
	static public $instance;

	function __construct () {
		$param = isset($_GET['param']) ? explode("/",$_GET['param']) : null;
		$this->page = isset($param[0]) && strlen($param[0]) ? $param[0] : "board";
		$this->action = isset($param[1]) ? $param[1] : null;
		$this->idx = isset($param[2]) ? $param[2] : null;
		$this->include_file = isset($this->action) ? $this->action : $this->page;
	}

	static public function init () {
		self::$instance = new Param();
	}

	static public function getInstance () {
		return self::$instance;
	}
}