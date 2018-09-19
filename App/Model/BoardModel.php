<?php
namespace App\Model;
use function \App\Core\{alert, move, access, print_pre, println};

class BoardModel extends Core {

	function getList () {
		return $this->fetchAll("SELECT * FROM board");
	}

	function getData () {
		return $this->fetch("SELECT * FROM board where idx = '{$this->param->idx}'");
	}

	function action () {
		extract($_POST);
		$add_sql = $sql = "";
		$cancel = '/idx/action';
		switch ($action) {
			case 'insert' :
				$add_sql .= ", date = now()";
			break;
			case 'update' :
				$add_sql .= " where idx = '{$this->param->idx}'";
			break;
		}
		$column = $this->getColumn($_POST, $cancel).$add_sql;
		if ($this->query_result($action, "board", $column)) {
			alert('완료되었습니다.');
			move(HOME_URL);
		}
	}
}