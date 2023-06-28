<?php

require_once '../BDD.php';

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

	public function add($datetime, $team_1, $team_2, $place, $score ){
        $co = $this->co;

        $sql = 'INSERT INTO meetings(datetime, team_1, team_2, place, score ) 
		VALUES(:datetime, :team_1, :team_2, :place, :score )';
        $req = $co->prepare($sql);
		
		$req->execute([
			'datetime' => $datetime,
            'team_1' => $team_1,
            'team_2' => $team_2,
			'place' => $place,
            'score' => $score,
		]);

		$meetings = $req->rowCount();
		return $meetings;
    }


	public function modify(){

		$co = $this->co;
		
        $sql = 'UPDATE meetings
		SET 
		datetime = :datetime,
		team_1 = :team_1,
		team_2 = :team_2,
		place = :place,
		score = :score

		WHERE 
		id = :id ';

        $req = $co->prepare($sql);

		$id = $_POST['id'];
		$datetime = $_POST['datetime'];
		$team_1 = $_POST['team_1'];
		$team_2 = $_POST['team_2'];
		$place = $_POST['place'];
		$score = $_POST['score'];

		$req->bindParam(':id', $id, PDO::PARAM_INT);
		$req->bindParam(':datetime', $datetime, PDO::PARAM_STR);
		$req->bindParam(':team_1', $team_1, PDO::PARAM_STR);
		$req->bindParam(':team_2', $team_2, PDO::PARAM_INT);
		$req->bindParam(':place', $place, PDO::PARAM_STR);
		$req->bindParam(':score', $score, PDO::PARAM_STR);
		
		$req->execute();

		$meetings = $req->rowCount();
		return $meetings;
    }

	public function delete($id){
        $co = $this->co;

        $sql = 'DELETE FROM meetings WHERE id = :id';
        $req = $co->prepare($sql);
        $req->execute([
			'id' => $id
		]);
		$meetings = $req->rowCount();
		return $meetings;
    }
}