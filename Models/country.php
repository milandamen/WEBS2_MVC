<?php 

class Country{
	private $id;
	private $name;
	private $users = array();

	
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


}



?>