<?php
require_once 'base_lib.php';

$controller = 'product';
$action = 'index';
$id = 0;

if (isset($_GET['controller'])) {
	$controller = strtolower($_GET['controller']);
} elseif (isset($_GET['Controller'])) {
	$controller = strtolower($_GET['Controller']);
}

if (isset($_GET['action'])) {
	$action = strtolower($_GET['action']);
} elseif (isset($_GET['Action'])) {
	$action = strtolower($_GET['Action']);
}

if (isset($_GET['id'])) {
	$id = $_GET['id'];
}

$controller = ucfirst($controller);
$controllername = $controller.'Controller';
$actionname = $action.'_'.getHttpMethod();

require_once 'Controllers/'.lcfirst($controllername).'.php';
$ctrl = new $controllername();
$ctrl->$actionname($id);
?>