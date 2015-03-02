<?php 

/*

getQuery voor het ophalen van data
execQuery voor het uitvoeren van insert/update/delete

*/


class BaseRepository
{
	protected $db;
	protected $tableName;

	private $queryAll = 'SELECT * FROM ';

	public funtion __construct(){
		require_once 'database.php';
		$this->db = new db();
	}

	public function getAll(){
		return $this->db->getQuery($this->qeuryAll . $this->tableName);
	}

	public function getById($id){
		$query = $this->queryAll . $this->tableName . ' WHERE ' . $this->tableName . 'id = :' . $this->tableName .'id';
		$parameter = array(':', $this->tableName . 'id' => $id);

		return $this->db->getQuery($query, $parameter);
	}

	public function add($object){

	}

	public function update($object){

	}
	public function delete($id){

		$query = 'DELETE FROM ' . $this->tableName . ' WHERE ' . $this->tableName . ' id = :' . $this->tableName . 'id';
		$parameter = array(':', $this->tableName . 'id' => $id);

		return $this->db->execQuery($query, $parameter);		
	}

}


?>