<?php
        session_start();

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
        <title>Traitement des formulaires team</title>
    </head>
    <body>
        <?php

            if(isset($_POST['add'])){
                echo "<p>Le formulaire a été envoyé</p>";

                $erreurs = false;

                if(isset($_POST['country']) && !empty($_POST['country'])){
                    echo "<p>Country : ".$_POST['country']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner l'équipe</p>";
                }

                if(isset($_POST['world_rank']) && !empty($_POST['world_rank'])){
                    echo "<p>world_rank : ".$_POST['world_rank']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner le world rank</p>";
                }

                if(isset($_POST['pool']) && !empty($_POST['pool'])){
                    echo "<p>pool : ".$_POST['pool']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner le pool</p>";
                }

                if(isset($_POST['emblem']) && !empty($_POST['emblem'])){
                    echo "<p>emblem : ".$_POST['emblem']."</p>";
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
                    $team = new Teams();
                    $teams = $team->add( 
                        $_POST['country'], 
                        $_POST['world_rank'],
                        $_POST['pool'], 
                        $_POST['emblem']); 
            
                    $_SESSION['add'] = true;
                    $_SESSION['country'] = $_POST['country'];
                    echo '<p>Le team ' . $_SESSION['country'] . ' a bien été ajouté</p>';
                   
                    // exit;
                    // Redirection vers index.php
                    // header('Location:   ../../index.php');
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
                    echo "<p>player : ".$_POST['id']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez sélectionnée le player</p>";
                }

                if(isset($_POST['country']) && !empty($_POST['country'])){
                    echo "<p>Country : ".$_POST['country']."</p>";
                }

                if(isset($_POST['world_rank']) && !empty($_POST['world_rank'])){
                    echo "<p>world_rank : ".$_POST['world_rank']."</p>";
                }

                if(isset($_POST['pool']) && !empty($_POST['pool'])){
                    echo "<p>pool : ".$_POST['pool']."</p>";
                }

                if(isset($_POST['emblem']) && !empty($_POST['emblem'])){
                    echo "<p>emblem : ".$_POST['emblem']."</p>";
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
                    $team = new Teams();

                    // $teams = $_POST['teams'];
                    $teams = $_POST['country'];
                    $lastname = $_POST['world_rank'];
                    $firstname = $_POST['pool'];
                    $club = $_POST['emblem'];

                    $teams = $team->modify();
                    

                    $_SESSION['edit'] = true;
                    $_SESSION['country'] = $_POST['country'];
                    echo '<p>Le team ' . $_SESSION['country'] . ' a bien été modifié</p>';
                   
                    // exit;
                    // Redirection vers index.php
                    // header('Location:   ../../../index.php');
                    echo '<p>Le player a bien été modifié</p>';
                    echo "<p><a href='./admin_index.php'>Retour a la page d'accueil</a></p>";
                }
                else{
                    echo "<p><a href='./admin_index.php'>Retour a la page d'accueil</a></p>";
                }
            }


            if(isset($_POST['delete'])){
                echo "<p>Le team à bien été supprimée</p>";

                $erreurs = false;

                if(isset($_POST['teams']) && !empty($_POST['teams'])){
                    echo "<p>team : ".$_POST['teams']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez sélectionnée le team</p>";
                }

                if($erreurs == false)
                {
                    $team = new teams();
                    $teams = $team->delete( 
                        $_POST['teams']);
            
                    $_SESSION['delete'] = true;
                    
                    echo '<p>Le team a bien été supprimée</p>';
                    echo "<p><a href='./admin_index.php'>Retour a la page d'accueil</a></p>";
                }
                else{
                    echo "<p><a href='./admin_index.php'>Retour a la page d'accueil</a></p>";
                }
            }   
        ?>    
    </body>
</html>
