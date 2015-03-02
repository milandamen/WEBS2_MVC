<?php 

require_once 'BaseRepository.php';

class SortRepository  extends BaseRepository{

	private $table = 'sort';

	public function __construct(){

		parent::__construct();
		$this->tableName = $this->table;

	}

	public function getAll(){
		$objects =  parent::getAll();
		$sortArray = array();

		foreach($objects as $item){
			$sortArray = new Sort($item->id, $item->name);
		}

		return $sortArray;
	}

	public fuction getById($id){
		$result =  parent::getById($id);

		if(count($result) == 1){
			$sort = new Sort($result[0]->id, $result[0]->name);
		}

		return $sort;
	}

	public function add($object){
		$query = 'INSERT INTO '. $this->table . '(id, name) VALUES(:id , :name)';

		$parameters = array(
			':id ' => $object->getId(),
			':name' => $object->getName();
		);

		$this->db->execQuery($query, $parameters);
	}

	public function update($object){
		$query = 'UPDATE ' . $this->table . '(id, name) VALUES(:id , :name)';

		$parameters = array(
			':id ' => $object->getId(),
			':name' => $object->getName();
		);

		$this->db->execQuery($query, $parameters);
	}

	public function delete($object){
		$query = 'DELETE ' .  $this->table . '(id, name) VALUES(:id , :name)';

		$parameters = array(
			':id ' => $object->getId(),
			':name' => $object->getName();
		);

		$this->db->execQuery($query, $parameters);
	}


	#Still figuring out how to manage this parameter stuff.
	public function getAllProducts($id){
		$query = 'SELECT * FROM product WHERE product.sort_id = : ' . $this->tableName . 'id';
		$parameters = array(':' => $id);


		$this->db->getQuery($query, $parameters);
	}



}


?>