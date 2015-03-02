<?php  

require_once 'BaseRepository.php';

class ProductRepository extends BaseRepository{

	private $table = 'beer';

	public function __construct(){

		parent::__construct();
		$this->tableName = $this->table;

	}

	public function getAll(){
		$objects =  parent::getAll();
		$productArray = array();

		foreach($objects as $item){
			$productArray = new Product($item->id, 
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
		}

		return $productArray();
	}

	public function getById($id){
		$result = parent::getById($id);

		if(count($result) == 1){
			$product = new Product($result[0]->id, 
									$result[0]->name, 
									$result[0]->percentage, 
									$result[0]->content,
									$result[0]->description,
									$result[0]->price,
									$result[0]->brand_id, 
									$result[0]->brewery_id, 
									$result[0]->wrapping_id,
									$result[0]->sort_id,
									$result[0]->img);
		}

		return $product;
	}

	public function add($object){
		$query = 'INSERT INTO '. $this->table . '(id, name, percentage, content, description, price, brand_id, brewery_id, wrapping_id, sort_id, img) 
										VALUES(:id , :name, :percentage, :content, :description, :price, :brand_id, :brewery_id, :wrapping_id,:sort_id, :img)';

		$parameters = array(
			':id ' 			=> $object->getId(),
			':content' 		=> $object->getContent();
			':name' 		=> $object->getName();
			':percentage'	=>$object->getPercentage();
			':description'	=> $object->getDescription();
			':price'		=>$object->getPrice();
			':brand_id'		=> $object->getBrandId();
			':brewery_id'	=> $object->getBreweryId();
			':wrapping_id' 	=>$object->getWrappingId();
			':sort_id'		=> $object->getSortId();
			':img'			=> $object->getIMG(); 
		);

		$this->db->execQuery($query, $parameters);

	}

	public function update($object){
		$query = 'UPDATE ' . $this->table . '(id, name, percentage, content, description, price, brand_id, brewery_id, wrapping_id, sort_id, img) 
										VALUES(:id , :name, :percentage, :content, :description, :price, :brand_id, :brewery_id, :wrapping_id,:sort_id, :img)';

		$parameters = array(
			':id ' 			=> $object->getId(),
			':content' 		=> $object->getContent();
			':name' 		=> $object->getName();
			':percentage'	=>$object->getPercentage();
			':description'	=> $object->getDescription();
			':price'		=>$object->getPrice();
			':brand_id'		=> $object->getBrandId();
			':brewery_id'	=> $object->getBreweryId();
			':wrapping_id' 	=>$object->getWrappingId();
			':sort_id'		=> $object->getSortId();
			':img'			=> $object->getIMG(); 
		);

		$this->db->execQuery($query, $parameters);
	}

	public function delete($object){
		$query = 'DELETE ' . $this->table . '(id, name, percentage, content, description, price, brand_id, brewery_id, wrapping_id, sort_id, img) 
										VALUES(:id , :name, :percentage, :content, :description, :price, :brand_id, :brewery_id, :wrapping_id,:sort_id, :img)';

		$parameters = array(
			':id ' 			=> $object->getId(),
			':content' 		=> $object->getContent();
			':name' 		=> $object->getName();
			':percentage'	=>$object->getPercentage();
			':description'	=> $object->getDescription();
			':price'		=>$object->getPrice();
			':brand_id'		=> $object->getBrandId();
			':brewery_id'	=> $object->getBreweryId();
			':wrapping_id' 	=>$object->getWrappingId();
			':sort_id'		=> $object->getSortId();
			':img'			=> $object->getIMG(); 
		);

		$this->db->execQuery($query, $parameters);
	}

	public function getBrand($object){

	}


}


?>