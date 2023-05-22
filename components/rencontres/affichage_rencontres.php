<?php
// include 'menu.php';
include 'components/bdd/BDD.php';
// inclure rencontres
include 'components/rencontres/Rencontres.php';

// AFFICHAGE RENCONTRES
$rencontre = new Rencontres();
$rencontres = $rencontre->findAll();


foreach($rencontres as $une_rencontre){
    ?>
    <h2><?=$une_rencontre['horaire']?><h2>
    <h1><?=$une_rencontre['equipe1']?><h1>
    <h1><?=$une_rencontre[ 'equipe2']?><h1>
    <br>
    <h2><?=$une_rencontre['lieu']?><h2>
    <br>
    <h2><?=$une_rencontre['score']?><h2>
    <hr>
    <?php
}
