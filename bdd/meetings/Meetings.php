<?php

require_once './bdd/BDD.php';


class Meetings extends BDD{
	private $id;
	private $datetime;
    private $team_1;
    private $team_2;
	private $place;
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

	public function setDatetimeStarts(string $datetime) : self
	{
		$this->datetime = $datetime;
		return $this;
	}

	public function getDatetimeStarts() : DateTime
	{
        $datetime = new DateTime($this->datetime);
		return $datetime;
	}

	public function setTeam1(int $team1) : self
	{
		$this->team1 = $team1;
		return $this;
	}

	public function getTeam1() : int
	{
		return $this->team1;
	}

    public function setTeam2(int $team2) : self
	{
		$this->team2 = $team2;
		return $this;
	}

	public function getTeam2() : int
	{
		return $this->team2;
	}
    
    public function setPlace(string $place) : self
	{
		$this->place = $place;
		return $this;
	}

	public function getPlace() : string
	{
		return $this->place;
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

		$sql = 'SELECT * FROM meetings';
		$req = $co->prepare($sql);
		$req->execute();

		$meetings = $req->fetchAll();

		return $meetings;
	}
}