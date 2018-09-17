<?php
	//session start
	session_start();

	// path
	define('_ROOT', __DIR__);
	define('_APP', _ROOT.'/App');
	define('_CONFIG', _APP.'/config');
	define('_CORE', _APP.'/Core');
	define('_VIEW', _APP.'/view');

	// URL
	define('HOME_URL', '/20180917_mvc');
	define('SRC_URL', HOME_URL.'/public');
	define('CSS_URL', SRC_URL.'/css');
	define('JS_URL', SRC_URL.'/js');
	define('IMG_URL', SRC_URL.'/img');

	// include 
	include_once(_CONFIG.'/lib.php');
	
	App\Core\Param::init();
	App\Core\Table::init();
	App\Controller\Core::run();