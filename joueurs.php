<?php

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

//     public function findById($id)
// {
//     $co = $this->co;

//     $sql = 'SELECT * FROM joueurs WHERE id = :id';
//     $req = $co->prepare($sql);
//     $req->execute(['id' => $id]);

//     $joueur = $req->fetch();
//     return $joueur;
// }