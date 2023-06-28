<?php
            session_start();

            // require_once '../BDD.php';
            require_once './bdd/Meetings.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Traitement des formulaires meeting</title>
    </head>
    <body>
        <?php

            if(isset($_POST['add'])){
                echo "<p>Le formulaire a été envoyé</p>";

                $erreurs = false;

                if(isset($_POST['datetime']) && !empty($_POST['datetime'])){
                    echo "<p>datetime : ".$_POST['datetime']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner l'équipe</p>";
                }

                if(isset($_POST['team_1']) && !empty($_POST['team_1'])){
                    echo "<p>team_1 : ".$_POST['team_1']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner le world rank</p>";
                }

                if(isset($_POST['team_2']) && !empty($_POST['team_2'])){
                    echo "<p>team_2 : ".$_POST['team_2']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner le team_2</p>";
                }

                if(isset($_POST['place']) && !empty($_POST['place'])){
                    echo "<p>place : ".$_POST['place']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner le place</p>";
                }

                if(isset($_POST['score']) && !empty($_POST['score'])){
                    echo "<p>score : ".$_POST['score']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner le score</p>";
                }

                if(isset($_POST['cgu']) && !empty($_POST['cgu'])){
                    echo "<p>CGU acceptées</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez accepter la politique de confidentialitée</p>";
                }

                if($erreurs == false)
                {
                    // Création d'une variable de session
                    // $_SESSION['Admin'] = true;
                    // $_SESSION['Admin'] = $_POST['lastname'];
                    $meeting = new Meetings();
                    $meetings = $meeting->add( 
                        $_POST['datetime'], 
                        $_POST['team_1'],
                        $_POST['team_2'],
                        $_POST['place'], 
                        $_POST['score']); 

                    $_SESSION['add'] = true;
                    $_SESSION['datetime'] = $_POST['datetime'];
                    echo '<p>Le meeting ' . $_SESSION['datetime'] . ' a bien été ajouté</p>';
                
                    // exit;
                    // Redirection vers index.php
                    // header('Location:   ../../index.php');
                    echo "<p><a href='../../index.php'>Retour a la page d'accueil</a></p>";
                }
                else{
                    echo "<p><a href='../../index.php'>Retour au formulaire</a></p>";
                }
            }


            if(isset($_POST['edit'])){
                echo "<p>Le formulaire a été envoyé</p>";

                $erreurs = false;

                if(isset($_POST['id']) && !empty($_POST['id'])){
                    echo "<p>meeting : ".$_POST['id']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez sélectionnée le meeting</p>";
                }

                if(isset($_POST['datetime']) && !empty($_POST['datetime'])){
                    echo "<p>datetime : ".$_POST['datetime']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner l'équipe</p>";
                }

                if(isset($_POST['team_1']) && !empty($_POST['team_1'])){
                    echo "<p>team_1 : ".$_POST['team_1']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner le world rank</p>";
                }

                if(isset($_POST['team_2']) && !empty($_POST['team_2'])){
                    echo "<p>team_2 : ".$_POST['team_2']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner le team_2</p>";
                }

                if(isset($_POST['place']) && !empty($_POST['place'])){
                    echo "<p>place : ".$_POST['place']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner le place</p>";
                }

                if(isset($_POST['score']) && !empty($_POST['score'])){
                    echo "<p>score : ".$_POST['score']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner le score</p>";
                }

                if(isset($_POST['cgu']) && !empty($_POST['cgu'])){
                    echo "<p>CGU acceptées</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez accepter la politique de confidentialitée</p>";
                }

                if($erreurs == false)
                {
                    // $id = $_POST['id'];
                    
                    // Création d'une variable de session
                    // $_SESSION['Admin'] = true;
                    // $_SESSION['Admin'] = $_POST['lastname'];
                    $meeting = new Meetings();

                    // $meetings = $_POST['meetings'];
                    $datetime = $_POST['datetime'];
                    $team_1 = $_POST['team_1'];
                    $team_2 = $_POST['team_2'];
                    $place = $_POST['place'];
                    $score = $_POST['score'];

                    $meetings = $meeting->modify();
                    

                    $_SESSION['edit'] = true;
                    $_SESSION['datetime'] = $_POST['datetime'];
                    echo '<p>Le meeting ' . $_SESSION['datetime'] . ' a bien été modifié</p>';
                
                    // exit;
                    // Redirection vers index.php
                    // header('Location:   ../../../index.php');
                    echo '<p>Le Meeting a bien été modifié</p>';
                    echo "<p><a href='../../index.php'>Retour a la page d'accueil</a></p>";
                }
                else{
                    echo "<p><a href='./edit_meetings.php'>Retour au formulaire</a></p>";
                }
            }


            if(isset($_POST['delete'])){
                echo "<p>Le meeting à bien été supprimée</p>";

                $erreurs = false;

                if(isset($_POST['meetings']) && !empty($_POST['meetings'])){
                    echo "<p>meeting : ".$_POST['meetings']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez sélectionnée le meeting</p>";
                }

                if($erreurs == false)
                {
                    $meeting = new Meetings();
                    $meetings = $meeting->delete( 
                        $_POST['meetings']);

                    $_SESSION['delete'] = true;
                    
                    echo '<p>Le Meeting a bien été supprimée</p>';
                    echo "<p><a href='../../index.php'>Retour a la page d'accueil</a></p>";
                }
                else{
                    echo "<p><a href='../../index.php'>Retour au formulaire</a></p>";
                }
            }   
        ?>    
    </body>
</html>
