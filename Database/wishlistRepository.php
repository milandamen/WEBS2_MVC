<?php 



require_once 'BaseRepository.php';

class WishRepository extends BaseRepository{

	private $table = 'wishlist';

	public function __construct(){

		parent::__construct();
		$this->tableName = $this->table;

	}

	public function getById(){

	}

	public function getAll(){

	}

	public function add(){

	}

	public function update(){

	}

	public function delete(){

	}

	public function emptyList(){

	}

	public function buyList(){

	}