<?php 

require_once 'baserepository.php';

class BreweryRepository  extends BaseRepository{

	private $table = 'brewery';

	public function __construct(){

		parent::__construct();
		$this->tableName = $this->table;

	}

	public function getAll(){
		$objects =  parent::getAll();
		$breweryArray = array();

		foreach($objects as $item){
			$breweryArray[] = new Brewery($item->id, $item->name);
		}

		return $breweryArray;
	}

	public function getById($id){
		$result =  parent::getById($id);

		if(count($result) == 1){
			$brewery = new Brewery($result[0]->id, $result[0]->name);
		} else {
			#Throw new exception. 
			throw new Exception('No brewery known for this idea');
		}

		return $brewery;
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