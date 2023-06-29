<?php
    session_start();

    if(!isset($_SESSION['admin'])){
        header('HTTP/1.0 404 Not Found');
        header('Location: ../error404.php');
        exit;
    }

    // require_once __DIR__.'/BDD.php';
    // include 'teams.php';
    require_once '../bdd/Teams.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Traitement du formulaire Equipe</title>
    </head>
    <body>
        <?php

            if(isset($_POST['add'])){
                echo "<p>Formulaire envoyé !</p>";

                $erreurs = false;

                if(isset($_POST['country']) && !empty($_POST['country'])){
                    echo "<p>Pays : ".$_POST['country']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner le pays !</p>";
                }

                if(isset($_POST['world_rank']) && !empty($_POST['world_rank'])){
                    echo "<p>Classement mondial : ".$_POST['world_rank']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner le classement mondial !</p>";
                }

                if(isset($_POST['pool']) && !empty($_POST['pool'])){
                    echo "<p>Poule : ".$_POST['pool']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner le poule !</p>";
                }

                if(isset($_POST['emblem']) && !empty($_POST['emblem'])){
                    echo "<p>Emblem : ".$_POST['emblem']."</p>";
                }

                if(isset($_POST['cgu']) && !empty($_POST['cgu'])){
                    echo "<p>CGU acceptées !</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez accepter la politique de confidentialitée.</p>";
                }

                if($erreurs == false)
                {
                    // Création d'une variable de session
                    $team = new Teams();
                    $teams = $team->add( 
                        $_POST['country'], 
                        $_POST['world_rank'],
                        $_POST['pool'], 
                        $_POST['emblem']); 
            
                    $_SESSION['add'] = true;
                    $_SESSION['country'] = $_POST['country'];
                    echo "<p>L'équipe " . $_SESSION['country'] . " a bien été ajouté</p>";
                   
                    echo "<p><a href='./admin_index.php'>Retour a la page d'accueil</a></p>";
                }
                else{
                    echo "<p><a href='./admin_index.php'>Retour a la page d'accueil</a></p>";
                }
            }


            if(isset($_POST['edit'])){
                echo "<p>Le formulaire a été envoyé</p>";

                $erreurs = false;

                if(isset($_POST['id']) && !empty($_POST['id'])){
                    echo "<p>L'équipe : ".$_POST['id']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez sélectionnée le l'équipe</p>";
                }

                if(isset($_POST['country']) && !empty($_POST['country'])){
                    echo "<p>Pays : ".$_POST['country']."</p>";
                }

                if(isset($_POST['world_rank']) && !empty($_POST['world_rank'])){
                    echo "<p>Classement mondial : ".$_POST['world_rank']."</p>";
                }

                if(isset($_POST['pool']) && !empty($_POST['pool'])){
                    echo "<p>Poule : ".$_POST['pool']."</p>";
                }

                if(isset($_POST['emblem']) && !empty($_POST['emblem'])){
                    echo "<p>Emblem : ".$_POST['emblem']."</p>";
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
                    $team = new Teams();

                    $teams = $_POST['country'];
                    $lastname = $_POST['world_rank'];
                    $firstname = $_POST['pool'];
                    $club = $_POST['emblem'];

                    $teams = $team->modify();
                    

                    $_SESSION['edit'] = true;
                    $_SESSION['country'] = $_POST['country'];
                    echo "<p>L'équipe " . $_SESSION['country'] . " a bien été modifiée !</p>";
                   
                    echo "<p>L'équipe a bien été modifié</p>";
                    echo "<p><a href='./admin_index.php'>Retour a la page d'accueil</a></p>";
                }
                else{
                    echo "<p><a href='./admin_index.php'>Retour a la page d'accueil</a></p>";
                }
            }


            if(isset($_POST['delete'])){
                echo "<p>L'équipe à bien été supprimée !</p>";

                $erreurs = false;

                if(isset($_POST['teams']) && !empty($_POST['teams'])){
                    echo "<p>L'équipe : ".$_POST['teams']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez sélectionnée l'équipe !</p>";
                }

                if($erreurs == false)
                {
                    $team = new teams();
                    $teams = $team->delete( 
                        $_POST['teams']);
            
                    $_SESSION['delete'] = true;
                    
                    echo "<p>L'équipe a bien été supprimée !</p>";
                    echo "<p><a href='./admin_index.php'>Retour a la page d'accueil</a></p>";
                }
                else{
                    echo "<p><a href='./admin_index.php'>Retour a la page d'accueil</a></p>";
                }
            }   
        ?>    
    </body>
</html>
