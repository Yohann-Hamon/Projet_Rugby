<?php
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

	// public function poste(){
	// 	$co = $this->co;

	// 	$sql = 'SELECT DISTINCT poste FROM joueurs ' ;
	// 	$req = $co->prepare($sql);
	// 	$req->execute();

	// 	$joueurs_poste = $req->fetchAll();

	// 	return $joueurs_poste;
	// }

	// public function club(){
	// 	$co = $this->co;

	// 	$sql = 'SELECT DISTINCT club FROM joueurs ' ;
	// 	$req = $co->prepare($sql);
	// 	$req->execute();

	// 	$joueurs_club = $req->fetchAll();

	// 	return $joueurs_club;
	// }


	// public function add($id, $poste, $pays_id, $club, $age, $taille, $poids, $nom, $prenom, $photo){
    //     $co = $this->co;

    //     $sql = 'INSERT INTO joueurs(id, poste, pays_id, club, age, taille, poids, nom, prenom, photo) 
	// 	VALUES(:id, :poste, :pays_id, :club, :age, :taille, :poids,  :nom, :prenom, :photo )';
    //     $req = $co->prepare($sql);
		
	// 	$req->execute([
	// 		'id' => $id,
    //         'poste' => $poste,
    //         'pays_id' => $pays_id,
	// 		'club' => $club,
    //         'age' => $age,
	// 		'taille' => $taille,
	// 		'poids' => $poids,
	// 		'nom' => $nom,
	// 		'prenom' => $prenom,
	// 		'photo' => $photo
	// 	]);

	// 	$joueurs = $req->rowCount();
	// 	return $joueurs;
    // }


	// public function modify(){

	// 	$co = $this->co;
		
    //     $sql = 'UPDATE joueurs
	// 	SET 
	// 	poste = :poste,
	// 	pays_id = :pays_id,
	// 	club = :club,
	// 	age = :age,
	// 	taille = :taille,
	// 	poids = :poids,
	// 	nom = :nom,
	// 	prenom = :prenom
	// 	photo = :photo

	// 	WHERE 
	// 	Id = :id ';

    //     $req = $co->prepare($sql);
		
	// 	$id = $_POST['id'];
	// 	$poste = $_POST['poste'];
	// 	$pays_id = $_POST['pays_id'];
	// 	$club = $_POST['club'];
	// 	$age = $_POST['age'];
	// 	$taille = $_POST['taille'];
	// 	$poids = $_POST['poids'];
	// 	$nom = $_POST['nom'];
	// 	$prenom = $_POST['prenom'];
	// 	$photo = $_POST['photo'];

	// 	$req->bindParam(':id', $id, PDO::PARAM_INT);
	// 	$req->bindParam(':poste', $poste, PDO::PARAM_STR);
	// 	$req->bindParam(':pays_id', $pays_id, PDO::PARAM_INT);
	// 	$req->bindParam(':club', $club, PDO::PARAM_STR);
	// 	$req->bindParam(':age', $age, PDO::PARAM_INT);
	// 	$req->bindParam(':taille', $taille, PDO::PARAM_INT);
	// 	$req->bindParam(':poids', $poids, PDO::PARAM_INT);
	// 	$req->bindParam(':nom', $nom, PDO::PARAM_STR);
	// 	$req->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    //     $req->bindParam(':photo', $photo, PDO::PARAM_STR);

	// 	$req->execute();

	// 	$joueurs = $req->rowCount();
	// 	return $joueurs;
    // }


	// public function delete($id){
    //     $co = $this->co;

    //     $sql = 'DELETE FROM joueurs WHERE id = :id';
    //     $req = $co->prepare($sql);
    //     $req->execute([
	// 		'id' => $id
	// 	]);
	// 	$joueurs = $req->rowCount();
	// 	return $joueurs;
    // }
}