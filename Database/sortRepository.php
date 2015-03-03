<?php 

require_once 'baserepository.php';

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
			$sortArray[] = new Sort($item->id, $item->name);
		}

		return $sortArray;
	}

	public function getById($id){
		$result =  parent::getById($id);

		if(count($result) == 1){
			$sort = new Sort($result[0]->id, $result[0]->name);
		} else {
				#Throw new exception. 
			throw new Exception('No sort known for this idea');
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



}


?>