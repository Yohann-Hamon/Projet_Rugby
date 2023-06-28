<?php
require_once './bdd/BDD.php';

class Teams extends BDD{
	private $id;
	private $emblem;
	private $world_rank;
	private $country;
	private $pool;

	public function setId(int $id) : self
	{
		$this->id = $id;
		return $this;
	}

	public function getId() : int
	{
		return $this->id;
	}

	public function setEmblem(string $emblem) : self
	{
		$this->emblem = $emblem;
		return $this;
	}

	public function getEmblem() : string
	{
		return $this->emblem;
	}

	public function setRank(int $rank) : self
	{
		$this->world_rank = $rank;
		return $this;
	}

	public function getRank() : int
	{
		return $this->world_rank;
	}

	public function setCountry(string $country) : self
	{
		$this->country = $country;
		return $this;
	}

	public function getCountry() : string
	{
		return $this->country;
	}

	public function setPool(string $pool) : self
	{
		$this->pool = $pool;
		return $this;
	}

	public function getPool() : string
	{
		return $this->pool;
	}


	
	public function findAll(){
		$co = $this->co;

		$sql = 'SELECT * FROM teams';
		$req = $co->prepare($sql);
		$req->execute();

		$teams = $req->fetchAll();

		return $teams;
	}

	public function ranking(){
		$co = $this->co;

		$sql = 'SELECT * FROM teams ORDER BY world_rank ASC';
		$req = $co->prepare($sql); 
		$req->execute();

		$teams_ranked = $req->fetchAll();
		

		return $teams_ranked;
	}

	public function pooling(){
		$co = $this->co;

		$sql = 'SELECT * FROM teams ORDER BY pool ASC';
		$req = $co->prepare($sql); 
		$req->execute();

		$teams_pooled = $req->fetchAll();

		return $teams_pooled;
	}

	public function pool(){
		$co = $this->co;

		$sql = 'SELECT DISTINCT pool FROM teams';
		$req = $co->prepare($sql); 
		$req->execute();

		$teams_pool = $req->fetchAll();

		return $teams_pool;
	}

	public function add($country, $world_rank, $emblem, $pool ){
        $co = $this->co;

        $sql = 'INSERT INTO teams(country, world_rank, emblem, pool ) 
		VALUES(:country, :world_rank, :emblem, :pool )';
        $req = $co->prepare($sql);
		
		$req->execute([
			'country' => $country,
            'world_rank' => $world_rank,
            'emblem' => $emblem,
			'pool' => $pool
		]);

		$teams = $req->rowCount();
		return $teams;
    }


	public function modify(){

		$co = $this->co;
		
        $sql = 'UPDATE teams
		SET 
		country = :country,
		world_rank = :world_rank,
		emblem = :emblem,
		pool = :pool

		WHERE 
		id = :id ';

        $req = $co->prepare($sql);

		$id = $_POST['id'];
		$country = $_POST['country'];
		$world_rank = $_POST['world_rank'];
		$emblem = $_POST['emblem'];
		$pool = $_POST['pool'];

		$req->bindParam(':id', $id, PDO::PARAM_INT);
		$req->bindParam(':country', $country, PDO::PARAM_STR);
		$req->bindParam(':world_rank', $world_rank, PDO::PARAM_STR);
		$req->bindParam(':emblem', $emblem, PDO::PARAM_STR);
		$req->bindParam(':pool', $pool, PDO::PARAM_INT);

		$req->execute();

		$teams = $req->rowCount();
		return $teams;
    }

	public function delete($id){
        $co = $this->co;

        $sql = 'DELETE FROM teams WHERE id = :id';
        $req = $co->prepare($sql);
        $req->execute([
			'id' => $id
		]);
		$teams = $req->rowCount();
		return $teams;
    }
}