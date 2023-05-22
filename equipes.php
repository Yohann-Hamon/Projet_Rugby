<?php


class Equipes extends BDD {
    private $id;
    private $nom;
    private $classement;
    private $embleme;

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

    // classement
    public function setClassement(string $classement) : self
    {
        $this-> classement =$classement;
        return $this;
    }

    public function getClassement() : string
    {
        return $this-> classement;
    }

    // embleme
    public function setEmbleme(string $embleme) : self
    {
        $this-> embleme =$embleme;
        return $this;
    }

    public function getEmbleme() : string
    {
        return $this-> embleme;
    }

    // récupérations des données de la table équipes
    public function findAll()
    {
        $co = $this->co;

        $sql = 'SELECT DISTINCT * FROM equipes';
        $req = $co -> prepare($sql);
        $req->execute();

        $equipes = $req->fetchAll();

        return $equipes;
    }


}

