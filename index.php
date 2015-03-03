<?php
require_once 'base_lib.php';

$controller = 'home';
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

$controller = $controller.'Controller';
$action .= getHttpMethod();

require_once 'Controller/'.lcfirst($controller);
$ctrl = new $controller();
$ctrl.$action($id);
?>