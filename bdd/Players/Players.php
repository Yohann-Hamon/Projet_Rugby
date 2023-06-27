<?php

require_once './bdd/BDD.php';

class Players extends BDD{
	private $id;
	private $position;
	private $country_id;
	private $club;
	private $age;
	private $height;
	private $weight;
	private $lastname;
	private $firstname;
	private $picture;

	public function setId(int $id) : self
	{
		$this->id = $id;
		return $this;
	}

	public function getId() : int
	{
		return $this->id;
	}

	public function setPosition(string $position) : self
	{
		$this->position = $position;
		return $this;
	}

	public function getPosition() : string
	{
		return $this->position;
	}

	public function setCountryId(int $country_id) : self
	{
		$this->country_id = $country_id;
		return $this;
	}

	public function getCountryId() : int
	{
		return $this->country_id;
	}

	public function setClub(string $club) : self
	{
		$this->club = $club;
		return $this;
	}

	public function getClub() : string
	{
		return $this->club;
	}

	public function setAge(int $age) : self
	{
		$this-$age = $age;
		return $this;
	}

	public function getAge() : int
	{
		return $this-$age;
	}

	public function setHeight(int $height) : self
	{
		$this->height = $height;
		return $this;
	}

	public function getHeight() : int
	{
		return $this->height;
	}

	public function setWeight(int $weight) : self
	{
		$this->weight = $weight;
		return $this;
	}

	public function getWeight() : int
	{
		return $this->weight;
	}

	public function setLastname(string $lastname) : self
	{
		$this->lastname = $lastname;
		return $this;
	}

	public function getLastname() : string
	{
		return $this->lastname;
	}

	public function setFirstname(string $firstname) : self
	{
		$this->firstname = $firstname;
		return $this;
	}

	public function getFirstname() : string
	{
		return $this->firstname;
	}

	public function setPicture(string $picture) : self
	{
		$this->picture = $picture;
		return $this;
	}

	public function getPicture() : string
	{
		return $this->picture;
	}


	public function findAll(){
		$co = $this->co;

		$sql = 'SELECT * FROM players';
		$req = $co->prepare($sql);
		$req->execute();

		$players = $req->fetchAll();

		return $players;
	}

	public function position(){
		$co = $this->co;

		$sql = 'SELECT DISTINCT position FROM players ' ;
		$req = $co->prepare($sql);
		$req->execute();

		$players_position = $req->fetchAll();

		return $players_position;
	}

	public function club(){
		$co = $this->co;

		$sql = 'SELECT DISTINCT Club FROM players ' ;
		$req = $co->prepare($sql);
		$req->execute();

		$players_club = $req->fetchAll();

		return $players_club;
	}


	public function add($country_id, $lastname, $firstname, $position, $club, $age, $height, $weight, $picture ){
        $co = $this->co;

        $sql = 'INSERT INTO players(country_id, lastname, firstname, position, Club, Age, height, weight ,picture ) 
		VALUES(:country_id, :lastname, :firstname, :position, :club, :age, :height,  :weight, :picture )';
        $req = $co->prepare($sql);
		
		$req->execute([
			'country_id' => $country_id,
            'lastname' => $lastname,
            'firstname' => $firstname,
			'position' => $position,
            'club' => $club,
			'weight' => $weight,
			'age' => $age,
			'height' => $height,
			'picture' => $picture
		]);

		$players = $req->rowCount();
		return $players;
    }


	public function modify(){

		$co = $this->co;
		
        $sql = 'UPDATE players
		SET 
		lastname = :lastname,
		firstname = :firstname,
		country_id = :country_id,
		Club = :club,
		position = :position,
		Age = :age,
		height = :height,
		weight = :weight,
		picture = :picture

		WHERE 
		Id = :id ';

        $req = $co->prepare($sql);

		$lastname = $_POST['lastname'];
		$firstname = $_POST['firstname'];
		$id = $_POST['id'];
		$country_id = $_POST['country_id'];
		$club = $_POST['clubs'];
		$position = $_POST['positions'];
		$age = $_POST['age'];
		$height = $_POST['height'];
		$weight = $_POST['weight'];
		$picture = $_POST['picture'];

		$req->bindParam(':id', $id, PDO::PARAM_INT);
		$req->bindParam(':lastname', $lastname, PDO::PARAM_STR);
		$req->bindParam(':firstname', $firstname, PDO::PARAM_STR);
		$req->bindParam(':country_id', $country_id, PDO::PARAM_INT);
		$req->bindParam(':club', $club, PDO::PARAM_STR);
		$req->bindParam(':position', $position, PDO::PARAM_STR);
		$req->bindParam(':age', $age, PDO::PARAM_INT);
		$req->bindParam(':height', $height, PDO::PARAM_INT);
		$req->bindParam(':weight', $weight, PDO::PARAM_INT);
        $req->bindParam(':picture', $picture, PDO::PARAM_INT);
        
		$req->execute();

		$players = $req->rowCount();
		return $players;
    }

	public function delete($id){
        $co = $this->co;

        $sql = 'DELETE FROM players WHERE id = :id';
        $req = $co->prepare($sql);
        $req->execute([
			'id' => $id
		]);
		$players = $req->rowCount();
		return $players;
    }
}