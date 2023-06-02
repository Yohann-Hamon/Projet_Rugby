<?php
// include 'menu.php';
// inclure equipe
include 'Equipes.php';

// AFFICHAGE DES EQUIPES
$equipe = new Equipes();
$equipes = $equipe->findAll();
// afficher les valeurs de chaques équipes
?>
    <?php foreach($equipes as $une_equipe){ ?>
        <img class="img" src="<?=$une_equipe['embleme']?>">
        <br>
        <h3> l'équipe est numéro <?=$une_equipe['classement_mondial']?> du classement mondial <h3>
        <br>
        <h1><?= $une_equipe['pays']?><h1>
        <hr>
    <?php } 