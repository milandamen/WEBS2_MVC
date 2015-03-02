<?php 

require_once 'baserepository.php';

class WrappingRepository  extends BaseRepository{

	private $table = 'wrapping';

	public function __construct(){

		parent::__construct();
		$this->tableName = $this->table;

	}

	public function getAll(){
		$objects =  parent::getAll();
		$wrappingArray = array();

		$i=0;
		foreach($objects as $item){
			$wrappingArray[$i] = new Wrapping($item->id, $item->name);
			$i++;
		}

		return $wrappingArray;
	}

	public function getById($id){
		$result =  parent::getById($id);

		if(count($result) == 1){
			$wrapping = new Wrapping($result[0]->id, $result[0]->name);
		} else {
				#Throw new exception. 
			return echo 'Database error: ID not available'.'<br/>';
		}

		return $wrapping;
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