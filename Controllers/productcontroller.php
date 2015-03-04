<?php
require_once 'baseController.php';
require_once 'Models/product.php';


class ProductController extends BaseController {
	public function index_GET() {

		$product = new Product(1, 'Testeee', '10d', '1L', 'Description', 'Price', '1', '1', '1', '1', 'test.jpg');

		$object = (object) $product;
		$this->renderView($object);
	}
}
?>