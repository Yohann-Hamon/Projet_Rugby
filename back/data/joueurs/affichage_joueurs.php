<?php
// include 'menu.php';
// include 'components/bdd/BDD.php';
// inclure joueurs
include 'Joueurs.php';


// AFFICHAGE DES JOUEURS
$joueurs = new Joueurs();
$joueurs = $joueurs->findAll();

// afficher les valeurs de chaques joueurs
foreach($joueurs as $un_joueur){
    ?>
    <h1><?=$un_joueur['prenom']?><h1>
    <h1><?=$un_joueur['nom']?><h1>
    <img class="img" src="<?=$un_joueur['photo']?>">
   <br>
   <h2><?=$un_joueur['poste']?><h2>
   <br>
   <h2><?=$un_joueur['pays_id']?><h2>
   <br>
   <h2><?=$un_joueur['club']?><h2>
   <br>
   <h2><?=$un_joueur['age']?> ans<h2>
   <br>
   <h2><?=$un_joueur['taille']?> m<h2>
   <br>
   <h2><?=$un_joueur['poids']?> kg<h2>
   <hr>
    <?php
}