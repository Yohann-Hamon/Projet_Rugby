<?php
    include '../includes/config.php';

    if(!isset($_SESSION['admin'])){
        header('HTTP/1.0 404 Not Found');
        header('Location: ../error404.php');
        exit;
    }

    require_once '../bdd/Meetings.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Traitement des formulaires rencontres</title>
    </head>
    <body>
        <?php

            if(isset($_POST['add'])){
                echo "<p>Formulaire envoyée !</p>";

                $erreurs = false;

                if(isset($_POST['datetime']) && !empty($_POST['datetime'])){
                    echo "<p>Date : ".$_POST['datetime']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner la date !</p>";
                }

                if(isset($_POST['team_1']) && !empty($_POST['team_1'])){
                    echo "<p>Equipe 1 : ".$_POST['team_1']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner l'Equipe 1 !</p>";
                }

                if(isset($_POST['team_2']) && !empty($_POST['team_2'])){
                    echo "<p>Equipe 2 : ".$_POST['team_2']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner l'équipe 2 !</p>";
                }

                if(isset($_POST['place']) && !empty($_POST['place'])){
                    echo "<p>Lieu : ".$_POST['place']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner le lieu !</p>";
                }

                if(isset($_POST['score']) && !empty($_POST['score'])){
                    echo "<p>Score : ".$_POST['score']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner le score !</p>";
                }

                if(isset($_POST['cgu']) && !empty($_POST['cgu'])){
                    echo "<p>CGU acceptées !</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez accepter la politique de confidentialitée !</p>";
                }

                if($erreurs == false)
                {
                    $meeting = new Meetings();
                    $meetings = $meeting->add( 
                        $_POST['datetime'], 
                        $_POST['team_1'],
                        $_POST['team_2'],
                        $_POST['place'], 
                        $_POST['score']); 

                    $_SESSION['add'] = true;
                    $_SESSION['datetime'] = $_POST['datetime'];
                    echo '<p>La rencontre ' . $_SESSION['datetime'] . ' a bien été ajoutée !</p>';
                
                    echo "<p><a href='./admin_index.php'>Retour a la page d'accueil</a></p>";
                }
                else{
                    echo "<p><a href='./admin_index.php'>Retour a la page d'accueil</a></p>";
                }
            }


            if(isset($_POST['edit'])){
                echo "<p>Formulaire envoyée !</p>";

                $erreurs = false;

                if(isset($_POST['id']) && !empty($_POST['id'])){
                    echo "<p>Rencontre : ".$_POST['id']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez sélectionnée la rencontre !</p>";
                }

                if(isset($_POST['datetime']) && !empty($_POST['datetime'])){
                    echo "<p>Date : ".$_POST['datetime']."</p>";
                }

                if(isset($_POST['team_1']) && !empty($_POST['team_1'])){
                    echo "<p>team_1 : ".$_POST['team_1']."</p>";
                }

                if(isset($_POST['team_2']) && !empty($_POST['team_2'])){
                    echo "<p>team_2 : ".$_POST['team_2']."</p>";
                }

                if(isset($_POST['place']) && !empty($_POST['place'])){
                    echo "<p>Lieu : ".$_POST['place']."</p>";
                }

                if(isset($_POST['score']) && !empty($_POST['score'])){
                    echo "<p>Score : ".$_POST['score']."</p>";
                }

                if(isset($_POST['cgu']) && !empty($_POST['cgu'])){
                    echo "<p>CGU acceptées !</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez accepter la politique de confidentialitée !</p>";
                }

                if($erreurs == false)
                {
                    $meeting = new Meetings();

                    $datetime = $_POST['datetime'];
                    $team_1 = $_POST['team_1'];
                    $team_2 = $_POST['team_2'];
                    $place = $_POST['place'];
                    $score = $_POST['score'];

                    $meetings = $meeting->modify();
                    

                    $_SESSION['edit'] = true;
                    $_SESSION['datetime'] = $_POST['datetime'];
                    echo '<p>La rencontre du ' . $_SESSION['datetime'] . ' a bien été modifiée !</p>';
                
                    echo '<p>La rencontre a bien été modifiée !</p>';
                    echo "<p><a href='./admin_index.php'>Retour a la page d'accueil</a></p>";
                }
                else{
                    echo "<p><a href='./admin_index.php'>Retour a la page d'accueil</a></p>";
                }
            }


            if(isset($_POST['delete'])){
                echo "<p>Le rencontre à bien été supprimée ! </p>";

                $erreurs = false;

                if(isset($_POST['meetings']) && !empty($_POST['meetings'])){
                    echo "<p>Rencontre : ".$_POST['meetings']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez sélectionnée la rencontre !</p>";
                }

                if($erreurs == false)
                {
                    $meeting = new Meetings();
                    $meetings = $meeting->delete( 
                        $_POST['meetings']);

                    $_SESSION['delete'] = true;
                    
                    echo '<p>Le rencontre a bien été supprimée !</p>';
                    echo "<p><a href='./admin_index.php'>Retour a la page d'accueil</a></p>";
                }
                else{
                    echo "<p><a href='./admin_index.php'>Retour a la page d'accueil</a></p>";
                }
            }   
        ?>    
    </body>
</html>
