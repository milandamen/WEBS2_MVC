<?php
class BaseController {
	protected function renderView($model = null) {
		global $controller;
		global $action;
		require_once 'Views/'.$controller.'/'.$action.'.php';
	}
}
?>