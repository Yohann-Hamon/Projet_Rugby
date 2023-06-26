<?php

class Teams extends BDD{
	private $id;
	private $emblem;
	private $world_ranking;
	private $country;

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

	public function setRanking(int $ranking) : self
	{
		$this->world_ranking = $ranking;
		return $this;
	}

	public function getRanking() : int
	{
		return $this->world_ranking;
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

		$sql = 'SELECT * FROM teams ORDER BY Poule ASC';
		$req = $co->prepare($sql); 
		$req->execute();

		$teams_ranked = $req->fetchAll();

		return $teams_ranked;
	}
}