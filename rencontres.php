<?php

 
class Rencontres extends BDD{
    private $id;
    private $horaire;
    // private $score;
    private $equipe_1;
    private $equipe_2;

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

    // horaire
    public function setHoraire(DateTime $horaire) : datetime
    {
        $this-> horaire =$horaire;
        return $this;
    }

    public function getHoraire() : DateTime
    {
        return $this-> horaire;
    }

    // lieu
    public function setLieu(string $lieu) : self
    {
        $this-> lieu =$lieu;
        return $this;
    }

    public function getLieu() : string
    {
        return $this-> lieu;
    }

    // equipe 1
    public function setEquipe_1(int $equipe_1) : self
    {
        $this-> equipe_1 =$equipe_1;
        return $this;
    }

    public function getEquipe_1() : int
    {
        return $this-> equipe_1;
    }

    // equipe 2
    public function setEquipe_2(int $id) : self
    {
        $this-> equipe_2 =$equipe_2;
        return $this;
    }

    public function getEquipe_2() : int
    {
        return $this-> equipe_2;
    }

    // récupérations des données de la table rencontres
    public function findAll()
    {
        $co = $this->co;

        $sql = 'SELECT horaire, lieu, e1.classement AS classement1, e1.nom AS nom1, e1.embleme AS embleme1, e2.classement AS classement2, e2.nom AS nom2, e2.embleme AS embleme2 FROM rencontres inner join equipes e1 on equipe_1 = e1.id inner join equipes e2 on equipe_2 = e2.id;';

        $req = $co -> prepare($sql);
        $req->execute();

        $rencontres = $req->fetchAll();

        return $rencontres;
    }
}