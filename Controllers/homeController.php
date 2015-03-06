<?php
require_once 'baseController.php';

class HomeController extends BaseController {
	public function index_GET() {
		
		$object = (object) array('title' =>'Test');
		$this->renderView($object);
	}
}
?>