<?php
class Joueurs extends BDD{
	private $id;
	private $poste;
	private $pays_id;
	private $club;
	private $age;
	private $taille;
	private $poids;
	private $nom;
	private $prenom;
	private $photo;

	public function setId(int $id) : self
	{
		$this->id = $id;
		return $this;
	}

	public function getId() : int
	{
		return $this->id;
	}

	public function setPoste(string $poste) : self
	{
		$this->poste = $poste;
		return $this;
	}

	public function getPoste() : string
	{
		return $this->poste;
	}

	public function setPaysId(int $pays_id) : self
	{
		$this->pays_id = $pays_id;
		return $this;
	}

	public function getPaysId() : int
	{
		return $this->pays_id;
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

	public function setTaille(int $taille) : self
	{
		$this->taille = $taille;
		return $this;
	}

	public function getTaille() : int
	{
		return $this->taille;
	}

	public function setPoids(int $poids) : self
	{
		$this->poids = $poids;
		return $this;
	}

	public function getPoids() : int
	{
		return $this->poids;
	}

	public function setNom(string $nom) : self
	{
		$this->nom = $nom;
		return $this;
	}

	public function getNom() : string
	{
		return $this->nom;
	}

	public function setPrenom(string $prenom) : self
	{
		$this->prenom = $prenom;
		return $this;
	}

	public function getPrenom() : string
	{
		return $this->prenom;
	}

	public function setPhoto(string $photo) : self
	{
		$this->photo = $photo;
		return $this;
	}

	public function getPhoto() : string
	{
		return $this->photo;
	}


	public function findAll(){
		$co = $this->co;

		$sql = 'SELECT * FROM joueurs';
		$req = $co->prepare($sql);
		$req->execute();

		$joueurs = $req->fetchAll();

		return $joueurs;
	}

	public function poste(){
		$co = $this->co;

		$sql = 'SELECT DISTINCT poste FROM joueurs ' ;
		$req = $co->prepare($sql);
		$req->execute();

		$joueurs_poste = $req->fetchAll();

		return $joueurs_poste;
	}

	public function club(){
		$co = $this->co;

		$sql = 'SELECT DISTINCT club FROM joueurs ' ;
		$req = $co->prepare($sql);
		$req->execute();

		$joueurs_club = $req->fetchAll();

		return $joueurs_club;
	}


	public function add($id, $poste, $pays_id, $club, $age, $taille, $poids, $nom, $prenom, $photo){
        $co = $this->co;

        $sql = 'INSERT INTO joueurs(id, poste, pays_id, club, age, taille, poids, nom, prenom, photo) 
		VALUES(:id, :poste, :pays_id, :club, :age, :taille, :poids,  :nom, :prenom, :photo )';
        $req = $co->prepare($sql);
		
		$req->execute([
			'id' => $id,
            'poste' => $poste,
            'pays_id' => $pays_id,
			'club' => $club,
            'age' => $age,
			'taille' => $taille,
			'poids' => $poids,
			'nom' => $nom,
			'prenom' => $prenom,
			'photo' => $photo
		]);

		$joueurs = $req->rowCount();
		return $joueurs;
    }


	public function modify(){

		$co = $this->co;
		
        $sql = 'UPDATE joueurs
		SET 
		poste = :poste,
		pays_id = :pays_id,
		club = :club,
		age = :age,
		taille = :taille,
		poids = :poids,
		nom = :nom,
		prenom = :prenom
		photo = :photo

		WHERE 
		Id = :id ';

        $req = $co->prepare($sql);
		
		$id = $_POST['id'];
		$poste = $_POST['poste'];
		$pays_id = $_POST['pays_id'];
		$club = $_POST['club'];
		$age = $_POST['age'];
		$taille = $_POST['taille'];
		$poids = $_POST['poids'];
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$photo = $_POST['photo'];

		$req->bindParam(':id', $id, PDO::PARAM_INT);
		$req->bindParam(':poste', $poste, PDO::PARAM_STR);
		$req->bindParam(':pays_id', $pays_id, PDO::PARAM_INT);
		$req->bindParam(':club', $club, PDO::PARAM_STR);
		$req->bindParam(':age', $age, PDO::PARAM_INT);
		$req->bindParam(':taille', $taille, PDO::PARAM_INT);
		$req->bindParam(':poids', $poids, PDO::PARAM_INT);
		$req->bindParam(':nom', $nom, PDO::PARAM_STR);
		$req->bindParam(':prenom', $prenom, PDO::PARAM_STR);
        $req->bindParam(':photo', $photo, PDO::PARAM_STR);

		$req->execute();

		$joueurs = $req->rowCount();
		return $joueurs;
    }


	public function delete($id){
        $co = $this->co;

        $sql = 'DELETE FROM joueurs WHERE id = :id';
        $req = $co->prepare($sql);
        $req->execute([
			'id' => $id
		]);
		$joueurs = $req->rowCount();
		return $joueurs;
    }
}