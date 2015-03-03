<?php 

class Product {
	private $id;				//int
	private $name;				//varchar
	private $percentage;		//varchar
	private $content;			//varchar
	private $description;		//varchar
	private $price;				//varchar
	private $brand_id;			//int
	private $brewery_id;		//int
	private $wrapping_id;		//int
	private $sort_id;			//int
	private $img;				//varchar

	// Linked classes - objects 
	private $brand;
	private $brewery;
	private $sort;
	private $wrapping;



	public function getId(){
		return $this->id;
	}

	public function getName(){
		return $this->name;
	}

	public function getPercentage(){
		return $this->percentage;	
	}

	public function getContent(){
		return $this->content;
	}

	public function getDescription(){
		return $this->description;
	}

	public function getPrice(){
		return $this->price;	
	}

	public function getBrandId(){
		return $this->brand_id;
	}

	public function getBrand(){
		return this->brand->getName();
	}

	public function getBreweryId(){
		return $this->brewery_id;
	}

	public function getBrewery(){
		return $this->brewery->getName();
	}

	public function getWrappingId(){
		return $this->wrapping_id;
	}

	public function getWrapping(){
		return $this->wrapping->getName();
	}

	public function getSortId(){
		return $this->sort_id;
	}

	public function getSort(){
		return $this->sort->getName();
	}

	public function getIMG(){
		return $this->img;
	}

}
?>
