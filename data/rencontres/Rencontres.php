<?php

class Rencontres extends BDD{
	private $id;
	private $horaire;
    private $equipe1;
    private $equipe2;
	private $lieu;
	private $score;

	public function setId(int $id) : self
	{
		$this->id = $id;
		return $this;
	}

	public function getId() : int
	{
		return $this->id;
	}

	public function setHoraireDebuts(string $horaire) : self
	{
		$this->horaire = $horaire;
		return $this;
	}

	public function getHoraireDebuts() : DateTime
	{
        $horaire = new DateTime($this->horaire);
		return $horaire;
	}

	public function setEquipe1(int $equipe1) : self
	{
		$this->equipe1 = $equipe1;
		return $this;
	}

	public function getEquipe1() : int
	{
		return $this->equipe1;
	}

    public function setEquipe2(int $equipe2) : self
	{
		$this->equipe2 = $equipe2;
		return $this;
	}

	public function getEquipe2() : int
	{
		return $this->equipe2;
	}
    
    public function setLieu(string $lieu) : self
	{
		$this->lieu = $lieu;
		return $this;
	}

	public function getLieu() : string
	{
		return $this->lieu;
	}

	public function setScore(string $score) : self
	{
		$this->score = $score;
		return $this;
	}

	public function getScore() : string
	{
		return $this->score;
	}

	public function findAll(){
		$co = $this->co;

		$sql = 'SELECT * FROM rencontres';
		$req = $co->prepare($sql);
		$req->execute();

		$recontres = $req->fetchAll();

		return $recontres;
	}
}