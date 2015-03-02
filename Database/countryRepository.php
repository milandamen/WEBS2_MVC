<?php 

require_once 'BaseRepository.php';

class CountryRepository extends BaseRepository{

	private $table = 'country';

	public function __construct(){

		parent::__construct();
		$this->tableName = $this->table;

	}

	public function getAll(){
		$objects =  parent::getAll();
		$countryArray = array();

		foreach($objects as $item){
			$countryArray = new Country($item->id, $item->name);
		}

		return $countryArray;
	}

	public fuction getById($id){
		$result =  parent::getById($id);

		if(count($result) == 1){
			$country = new Country($result[0]->id, $result[0]->name);
		}

		return $country;
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