<?php
class BaseController {
	protected function renderView($viewname, $model) {
		require_once '../Views/'.$viewname.'.php';
	}
}
?>