<?php 

class Brand{
	private $id;
	private $name;

	// wil contain a list of all products with this brand.
	private $products = array();

	public function __construct($id, $name){
		$this->id = $id;
		$this->name = $name;
	}

	public function getId(){
		return $this->id;
	}

	public function getName(){
		return $this->name;
	}




}?>