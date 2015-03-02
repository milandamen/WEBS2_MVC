<?php 

require_once 'baserepository.php';

class BrandRepository  extends BaseRepository{

	private $table = 'brand';

	public function __construct(){

		parent::__construct();
		$this->tableName = $this->table;

	}

	public function getAll(){
		$objects =  parent::getAll();
		$brandArray = array();

		$i =0;
		foreach($objects as $item){
			$brandArray[$i] = new Brand($item->id, $item->name);
			$i++;
		}

		return $brandArray;
	}

	public function getById($id){
		$result =  parent::getById($id);

		if(count($result) == 1){
			$brand = new Brand($result[0]->id, $result[0]->name);
		} else {
			#Throw new exception. 
			return echo 'Database error: ID not available'.'<br/>';
		}

		return $brand;
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
		$query = 'SELECT * FROM product WHERE product.brand_id = : ' . $this->tableName . 'id';
		$parameters = array(':' => $id);


		$objects = $this->db->getQuery($query, $parameters);

		$brandProductArray = array();
		$i = 0;
		foreach($objects as $item){
			$brandProductArray[$i] = new Product($item->id, 
										$item->name, 
										$item->percentage, 
										$item->content,
										$item->description,
										$item->price,
										$item->brand_id, 
										$item->brewery_id, 
										$item->wrapping_id,
										$item->sort_id,
										$item->img);

			$i++;
		}

		return $brandProductArray;


	}



}


?>