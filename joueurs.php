<?php



class Joueurs extends BDD{
    private $id;
    private $nom;
    private $poste;
    private $club;
    private $age;
    private $taille;
    private $poids;

    // id
    public function setId(int $id) : self
    {
        $this-> id =$id;
        return $this;
    }

    public function getId() : int
    {
        return $this-> id;
    }

    // nom
    public function setNom(string $nom) : self
    {
        $this-> nom =$nom;
        return $this;
    }

    public function getNom() : string
    {
        return $this-> nom;
    }

    // poste
    public function setPoste(string $poste) : self
    {
        $this-> poste =$poste;
        return $this;
    }

    public function getPoste() : string
    {
        return $this-> poste;
    }

    // club
    public function setClub(string $club) : self
    {
        $this-> club =$club;
        return $this;
    }

    public function getClub() : string
    {
        return $this-> club;
    }

    // age
    public function setAge(int $age) : self
    {
        $this-> age =$age;
        return $this;
    }

    public function getAge() : int
    {
        return $this-> age;
    }
    // taille
    public function setTaille(int $taille) : self
    {
        $this-> taille =$taille;
        return $this;
    }

    public function getTaille() : float
    {
        return $this-> taille;
    }

    // poids
    public function setPoids(int $poids) : self
    {
        $this-> poids =$poids;
        return $this;
    }

    public function getPoids() : int
    {
        return $this-> poids;
    }

    // récupérations des données de la table joueurs
    public function findAll()
    {
        $co = $this->co;

        $sql = 'SELECT * FROM joueurs';
        $req = $co -> prepare($sql);
        $req->execute();

        $joueurs = $req->fetchAll();

        return $joueurs;
    }


public function Ajout($photo, $prenom, $nom, $poids , $taille, $age, $club, $pays_id, $poste)
{
    $co = $this->co;

    $sql = 
    "INSERT INTO joueurs (photo, prenom, nom, poids , taille, age, club, pays_id, poste)
    VALUES (:photo, :prenom, :nom, :poids , :taille, :age, :club, :pays_id, :poste)";
    $req = $co -> prepare($sql);
    $req->execute([
        'photo' => $photo, 
        'prenom' => $prenom, 
        'nom' => $nom, 
        'poids' => $poids, 
        'taille' => $taille
        'age' => $age, 
        'club' => $club,
        'pays_id' => $pays_id,
        'poste' => $poste, 
    ]);

    $joueurs = $req->rowCount();

    return $joueurs;
}
}
//     public function findById($id)
// {
//     $co = $this->co;

//     $sql = 'SELECT * FROM joueurs WHERE id = :id';
//     $req = $co->prepare($sql);
//     $req->execute(['id' => $id]);

//     $joueur = $req->fetch();
//     return $joueur;
// }