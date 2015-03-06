<?php
class BaseController {
	protected function renderView($model = null, $title = 'Home', $sidebar = null) {
		global $controller;
		global $action;
		
		global $smarty;
		$smarty->setTemplateDir('Views/'.$controller.'/templates/');
		$smarty->setCompileDir('Views/'.$controller.'/templates_c/');
		$smarty->setConfigDir('Views/'.$controller.'/configs/');
		$smarty->setCacheDir('Views/'.$controller.'/cache/');

		$smarty->assign('model', $model);
		$smarty->assign('title', $title);
		$smarty->assign('sidebar', $sidebar);
		
		$smarty->display('Views/Shared/header.tpl');
		$smarty->display($action.'.tpl');
		$smarty->display('Views/Shared/footer.tpl');
	}
}
?>