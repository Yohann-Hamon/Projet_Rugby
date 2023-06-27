<?php

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
		$sql = 'SELECT * FROM teams ORDER BY pool ASC';
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
}