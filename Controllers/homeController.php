<?php
require_once 'baseController.php';

class HomeController extends BaseController {
	public function index_GET() {
		
		//$object = (object) array('title' =>'Test');
		$object = 'henk';
		$this->renderView($object, 'Johannes');
	}
}
?>