<?php

class Equipes extends BDD{
	private $id;
	private $embleme;
	private $classement_mondial;
	private $pays;

	public function setId(int $id) : self
	{
		$this->id = $id;
		return $this;
	}

	public function getId() : int
	{
		return $this->id;
	}

	public function setEmbleme(string $embleme) : self
	{
		$this->embleme = $embleme;
		return $this;
	}

	public function getEmbleme() : string
	{
		return $this->embleme;
	}

	public function setClassement(int $classement) : self
	{
		$this->classement_mondial = $classement;
		return $this;
	}

	public function getClassement() : int
	{
		return $this->classement_mondial;
	}

	public function setPays(string $pays) : self
	{
		$this->pays = $pays;
		return $this;
	}

	public function getPays() : string
	{
		return $this->pays;
	}


	
	public function findAll(){
		$co = $this->co;

		$sql = 'SELECT * FROM equipes';
		$req = $co->prepare($sql);
		$req->execute();

		$equipes = $req->fetchAll();

		return $equipes;
	}

	public function ranking(){
		$co = $this->co;

		$sql = 'SELECT * FROM equipes ORDER BY classement_mondial ASC';
		$req = $co->prepare($sql); 
		$req->execute();

		$equipes_ranked = $req->fetchAll();

		return $equipes_ranked;
	}
}