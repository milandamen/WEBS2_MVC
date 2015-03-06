<?php
class BaseController {
	protected function renderView($model = null) {
		global $controller;
		global $action;
		
		global $smarty;
		$smarty->setTemplateDir('Views/'.$controller.'/templates/');
		$smarty->setCompileDir('Views/'.$controller.'/templates_c/');
		$smarty->setConfigDir('Views/'.$controller.'/configs/');
		$smarty->setCacheDir('Views/'.$controller.'/cache/');

		$smarty->assign('model', $model);

		$smarty->display($action.'.tpl');
	}
}
?>