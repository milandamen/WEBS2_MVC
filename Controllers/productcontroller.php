<?php
require_once 'baseController.php';
require_once 'Models/product.php';


class ProductController extends BaseController {
	public function index_GET() {

		$product = array();
		$product[] = new Product(1, 'Testeee', '10d', '1L', 'Description', 'Price', '1', '1', '1', '1', 'test.jpg');
		$product[] = new Product(2, 'Testeee', '10d', '1L', 'Description', 'Price', '1', '1', '1', '1', 'test.jpg');
		$product[] = new Product(3, 'Testeee', '10d', '1L', 'Description', 'Price', '1', '1', '1', '1', 'test.jpg');
		$product[] = new Product(4, 'Testeee', '10d', '1L', 'Description', 'Price', '1', '1', '1', '1', 'test.jpg');


		$object =  (object) $product;

		$this->renderView($object);
	}

	public function detail_GET($id) {

		$product = new Product(1, 'Testeee', '10d', '1L', 'Description', 'Price', '1', '1', '1', '1', 'test.jpg');

		$object = (object) $product;
		$this->renderView($object);
	}
}
?>