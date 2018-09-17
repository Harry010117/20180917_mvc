<?php
namespace App\Controller;
use function \App\Core\{alert, move, access, print_pre, println};

class Core {
	function __construct ($param, $model) {
		$this->param = $param;
		$this->model = $model;
		if (method_exists($this, $param->include_file)) {
			$this->{$param->include_file}();
		}
		if (isset($_POST['action'])) {
			$model->action();
			exit;
		}
		extract((Array)$this);
		include_once(_VIEW."/template/header.php");
		include_once(_VIEW."/{$param->page}/{$param->include_file}.php");
		include_once(_VIEW."/template/footer.php");
	}

	static function run () {
		$param = \App\Core\Param::getInstance();
		$name = ucfirst($param->page);
		$controllerName = "\\App\\Controller\\{$name}Controller";
		$modelName = "\\App\\Model\\{$name}Model";
		$model = new $modelName();
		new $controllerName($param, $model);
	}
}