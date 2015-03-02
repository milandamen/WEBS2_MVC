<?php 

require_once 'baserepository.php';

/* Table information
	1 	session_token	varchar(30)	
	2	beer_id			int(11)	
	3	user_id			int(11)		
	4	number			varchar(45)

TODO: 
	- make sure 1 cart gets created for every session token. Instead of 1 cart for every product in that cart.
*/



class CartRepository extends BaseRepository{

	private $table = 'cart';

	public function __construct(){

		parent::__construct();
		$this->tableName = $this->table;

	}

	public function getById($token){
		$query = 'SELECT * FROM ' . $this->table . 
				 ' WHERE '. $this->tableName .' session_token = : '. $this->tableName . 'session_token' ;
																
		$parameters = array(
				: => $this->table, 
				:id => $token);

		if(count($result) == 1){
			$cart = new Cart($result[0]->session_token, $result[0]->beer_id, $result[0]->user_id, $result[0]->number);
		}

		$this->db->getQuery($query, $parameters);
	}

	public function getAll(){
		$objects =  parent::getAll();
		$cartArray = array();

		$i = 0;
		foreach($objects as $item){
			$cartArray[$i] = new Cart($item->session_token, $item->beer_id, $item->user_id, $item->number);
			$i++;		
		}

		return $cartArray;
	}

	//  Add - update - delete  COMPLETE CART

	public function add(){
		$query = 'INSERT INTO '. $this->table . '(session_token, beer_id) VALUES(:session_token, :beer_id)';

		$parameters = array(
			':session_token ' 	=> $object->getToken(),
			':beer_id' 			=> $object->getBeerId();
		);

		$this->db->execQuery($query, $parameters);
	}

	public function update($object){

	}

	public function delete($object){

	}



	// Add - Update - Delete Item

	public function addItem($object){
		$query = 'INSERT INTO '. $this->table . '(session_token, beer_id, user_id, number) VALUES(:session_token, :beer_id, :user_id, :number)';

		$parameters = array(
			':session_token ' 	=> $object->getToken(),
			':beer_id' 			=> $object->getBeerId();
			':user_id' 			=> $object->getUser();
			':number' 			=> $object->getNumber();
		);

		$this->db->execQuery($query, $parameters);
	}

	public function updateItem($object){
		$query = 'UPDATE '. $this->table . '(session_token, beer_id, user_id, number) VALUES(:session_token, :beer_id, :user_id, :number)';

		$parameters = array(
			':session_token ' 	=> $object->getToken(),
			':beer_id' 			=> $object->getBeerId();
			':user_id' 			=> $object->getUser();
			':number' 			=> $object->getNumber();
		);

		$this->db->execQuery($query, $parameters);
	}

	public function deleteItem($object){
		$query = 'UPDATE '. $this->table . '(session_token, beer_id, user_id, number) VALUES(:session_token, :beer_id, :user_id, :number)';

		$parameters = array(
			':session_token ' 	=> $object->getToken(),
			':beer_id' 			=> $object->getBeerId();
			':user_id' 			=> $object->getUser();
			':number' 			=> $object->getNumber();
		);

		$this->db->execQuery($query, $parameters);
	}


