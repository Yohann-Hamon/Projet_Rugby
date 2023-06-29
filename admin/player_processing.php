<?php
    session_start();

    if(!isset($_SESSION['admin'])){
        header('HTTP/1.0 404 Not Found');
        header('Location: ../error404.php');
        exit;
    }

    require_once '../bdd/Players.php';
    include '../htaccess.php'
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Traitement des formulaires joueurs</title>
    </head>
    <body>
        <?php

            if(isset($_POST['add'])){
                echo "<p>Formulaire envoyé !</p>";

                $erreurs = false;

                if(isset($_POST['teams']) && !empty($_POST['teams'])){
                    echo "<p>Equipe : ".$_POST['teams']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner l'equipe !</p>";
                }

                if(isset($_POST['lastname']) && !empty($_POST['lastname'])){
                    echo "<p>Nom : ".$_POST['lastname']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner le nom !</p>";
                }

                if(isset($_POST['firstname']) && !empty($_POST['firstname'])){
                    echo "<p>Prénom : ".$_POST['firstname']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner le prénom !</p>";
                }

                if(isset($_POST['position']) && !empty($_POST['position'])){
                    echo "<p>Poste : ".$_POST['position']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner le poste</p>";
                }

                if(isset($_POST['club']) && !empty($_POST['club'])){
                    echo "<p>Club : ".$_POST['club']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner le club !</p>";
                }

                if(isset($_POST['weight']) && !empty($_POST['weight'])){
                    echo "<p>Poids : ".$_POST['weight']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner le poids !</p>";
                }

                if(isset($_POST['age']) && !empty($_POST['age'])){
                    echo "<p>Age : ".$_POST['age']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner l'age !</p>";
                }

                if(isset($_POST['height']) && !empty($_POST['height'])){
                    echo "<p>Taille : ".$_POST['height']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner le taille</p>";
                }

                if(isset($_POST['picture']) && !empty($_POST['picture'])){
                    echo "<p>Photo : ".$_POST['picture']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner la photo !</p>";
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
                    $player = new Players();
                    $players = $player->add( 
                        $_POST['teams'], 
                        $_POST['lastname'],
                        $_POST['firstname'], 
                        $_POST['position'], 
                        $_POST['club'], 
                        $_POST['age'], 
                        $_POST['height'],
                        $_POST['weight'],
                        $_POST['picture']); 
            
                    $_SESSION['add'] = true;
                    $_SESSION['lastname'] = $_POST['lastname'];
                    $_SESSION['firstname'] = $_POST['firstname'];
                    echo '<p>Le joueur ' . $_SESSION['lastname']. '' .$_SESSION['lastname']. '  a bien été ajouté !</p>';
                   
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
                    echo "<p>Joueur : ".$_POST['id']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez sélectionnée le joueur !</p>";
                }

                if(isset($_POST['teams']) && !empty($_POST['teams'])){
                    echo "<p>Equipe : ".$_POST['teams']."</p>";
                }

                if(isset($_POST['lastname']) && !empty($_POST['lastname'])){
                    echo "<p>Nom : ".$_POST['lastname']."</p>";
                }

                if(isset($_POST['firstname']) && !empty($_POST['firstname'])){
                    echo "<p>Prénom : ".$_POST['firstname']."</p>";
                }

                if(isset($_POST['position']) && !empty($_POST['position'])){
                    echo "<p>Poste : ".$_POST['position']."</p>";
                }

                if(isset($_POST['club']) && !empty($_POST['club'])){
                    echo "<p>Club : ".$_POST['club']."</p>";
                }

                if(isset($_POST['weight']) && !empty($_POST['weight'])){
                    echo "<p>poids : ".$_POST['weight']."</p>";
                }

                if(isset($_POST['age']) && !empty($_POST['age'])){
                    echo "<p>Age : ".$_POST['age']."</p>";
                }

                if(isset($_POST['height']) && !empty($_POST['height'])){
                    echo "<p>Taille : ".$_POST['height']."</p>";
                }

                if(isset($_POST['picture']) && !empty($_POST['picture'])){
                    echo "<p>Photo : ".$_POST['picture']."</p>";
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
                    $player = new Players();

                    $teams = $_POST['teams'];
                    $lastname = $_POST['lastname'];
                    $firstname = $_POST['firstname'];
                    $club = $_POST['club'];
                    $position = $_POST['position'];
                    $age = $_POST['age'];
                    $height = $_POST['height'];
                    $weight = $_POST['weight'];
                    $picture = $_POST['picture'];

                    $players = $player->modify();
                    

                    $_SESSION['edit'] = true;
                    $_SESSION['lastname'] = $_POST['lastname'];
                    $_SESSION['firstname'] = $_POST['firstname'];
                    echo '<p>Le joueur ' . $_SESSION['lastname']. '' .$_SESSION['lastname']. ' a bien été modifié !</p>';

                    echo "<p><a href='./admin_index.php'>Retour a la page d'accueil</a></p>";
                }
                else{
                    echo "<p><a href='./admin_index.php'>Retour a la page d'accueil</a></p>";
                }
            }


            if(isset($_POST['delete'])){
                echo "<p>Le joueur à bien été supprimée</p>";

                $erreurs = false;

                if(isset($_POST['players']) && !empty($_POST['players'])){
                    echo "<p>Joueur : ".$_POST['players']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez sélectionnée le joeur !</p>";
                }

                if($erreurs == false)
                {
                    $player = new Players();
                    $players = $player->delete( 
                        $_POST['players']);
            
                    $_SESSION['delete'] = true;
                    
                    echo '<p>Le joueur a bien été supprimée !</p>';
                    echo "<p><a href='./admin_index.php'>Retour a la page d'accueil</a></p>";
                }
                else{
                    echo "<p><a href='./admin_index.php'>Retour a la page d'accueil</a></p>";
                }
            }   
        ?>    
    </body>
</html>
