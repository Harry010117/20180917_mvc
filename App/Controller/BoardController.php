<?php
namespace App\Controller;
use function \App\Core\{alert, move, access, print_pre, println};

class BoardController extends Core {
	function board () {
		$this->list = $this->model->getList();	
	}

	function update () {
		$this->view();
	}

	function view () {
		$this->data = $this->model->getData();
	}

	function delete () {
		$this->model->query("DELETE FROM board where idx = '{$this->param->idx}'");
		alert('삭제되었습니다.');
		move($this->param->get_page);
		exit;
	}
}