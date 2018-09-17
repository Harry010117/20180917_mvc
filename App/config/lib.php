<?php
namespace App\Core;

function alert ($msg) {
	echo "<script>alert('{$msg}')</script>";
}

function move ($url = false) {
	echo "<script>";
	echo $url ? "document.location.replace('{$url}')" : "history.back()";
	echo "</script>";
	exit;
}

function access ($bool, $msg, $url = false) {
	if (!$bool) {
		alert($msg);
		move($url);
	}
}

function print_pre ($ele) {
	echo "<pre>";
	print_r($ele);
	echo "</pre>";
}

function println ($ele) {
	echo "<p>{$ele}</p>";
}

spl_autoload_register(function ($className) {
	// ex : App\Controller\Core => App/Controller/Core
	$className = str_replace("\\", "/", $className);
	include_once(_ROOT.'/'.$className.".php");
});