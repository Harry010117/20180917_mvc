<?php
namespace App\Model;
use function \App\Core\{alert, move, access, print_pre, println};

class Core {

	var $sql;
	var $execArr = null;

	function __construct () {
		$this->param = \App\Core\Param::getInstance();
		$this->table = \App\Core\Table::getInstance();
	}

	function init () {
		$this->db = new \PDO("mysql:host=127.0.0.1;dbname=php_test;charset=utf8", "root", "");
		$this->db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
	}

	function query ($sql = false) {
		if($sql) $this->sql = $sql;
		$this->init();
		$res = $this->db->prepare($this->sql);
		if ($res->execute($this->execArr)) {
			$this->db = null;
			return $res;
		} else {
			print_pre($this->sql);
			print_pre($this->execArr);
			print_pre($this->db->errorInfo());
			exit;
		}
	}

	function fetch ($sql = false) {
		if ($sql) $this->sql = $sql;
		return $this->query()->fetch();
	}

	function fetchAll ($sql = false) {
		if ($sql) $this->sql = $sql;
		return $this->query()->fetchAll();
	}

	function rowCount ($sql = false) {
		if ($sql) $this->sql = $sql;
		return $this->query()->rowCount();
	}

	function getColumn ($arr, $cancel) {
		$cancel = explode('/', $cancel);
		$column = '';
		foreach ($arr as $key=>$val) {
			if (in_array($key, $cancel)) continue;
			$column .= ", {$key} = :{$key}";
			$this->execArr[":{$key}"] = $val;
		}
		return substr($column, 2);
	}

	function query_result ($action, $table, $column) {
		switch ($action) {
			case 'insert' :
				$sql = "INSERT INTO {$table} SET ";
			break;
			case 'update' :
				$sql = "UPDATE {$table} SET ";
			break;
			case 'delete' :
				$sql = "DELETE FROM {$table} ";
			break;
		}
		$sql .= $column;
		return $this->query($sql);
	}
}