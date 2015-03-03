<?php 

class Brewery{
	private $id;
	private $name;
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