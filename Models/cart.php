<?php 
/* Table information
	1 	session_token	varchar(30)	
	2	beer_id			int(11)	
	3	user_id			int(11)		
	4	number			varchar(45)

	TODO: make sure a cart has a list of all beers in that cart.
*/



class Cart{

	private $token;
	private $user;
	private $beers = array();   // 2 elements: $beer and $number;


	#temp holders for selected cart-item
	private $beer;
	private $number;

	public function __construct($token, $user){
		$this->token = $token;
		$this->user = $user;

	}

	public function getToken(){
		return $this->token;
	}

	public function getUser(){
		return $this->user->getId();
	}

	public function getBeers(){
		return $this->beers;
	}

	public function getBeerId(){
		return $this->beer->getId();
	}

	public function getNumber(){
		return $this->number;
	}



}


?>