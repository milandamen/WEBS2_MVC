<?php
require_once 'baseController.php';

class HomeController extends BaseController {
	public function index_GET() {
		$object = 'derp';
		$this->renderView($object);
	}
}
?>