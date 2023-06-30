<?php
    include '../includes/config.php';

    require_once '../bdd/Users.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>Traitement du formulaire admin</title>
    </head>
    <body class="p-3 mb-2 bg-primary text-white text-center fs-3">
        <?php
            if(isset($_POST['registration'])){
                echo "<p>Formulaire envoyé !</p>";

                $erreurs = false;

                if(isset($_POST['username']) && !empty($_POST['username'])){
                    echo "<p>Identifiant : ".$_POST['username']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner l'identifiant !</p>";
                }

                if(isset($_POST['mail']) && !empty($_POST['mail'])){
                    echo "<p>Email : ".$_POST['mail']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner l'email !</p>";
                }


                if(isset($_POST['password']) && !empty($_POST['password'])){
                    echo "<p>Mot de passe : ".$_POST['password']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner le mot de passe !</p>";
                }


                if($erreurs == false)
                {
                    $user = new Users();
                    $users = $user->signUp( 
                        $_POST['username'], 
                        $_POST['mail'],
                       $_POST['password']);

                    // Création d'une variable de session
                    $_SESSION['username'] = $_POST['username'];
                    echo "<p>L' Admin " . $_SESSION['username'] . " a bien été inscrit !</p>";
 
                    // Redirection vers index.php
                    echo "<p><a href='./connection.php'>connexion</a></p>";
                    echo "<p><a href='../index.php'>Retour à l'accueil</a></p>";
                }
                else{
                    echo "<p><a href='./registration.php'>Retour au formulaire</a></p>";
                }
            }

            if(isset($_POST['connection'])){
                echo "<p>Formulaire envoyé !</p>";

                $erreurs = false;

                if(isset($_POST['mail']) && !empty($_POST['mail'])){
                    echo "<p>email : ".$_POST['mail']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner votre email !</p>";
                }

                if(isset($_POST['password']) && !empty($_POST['password'])){
                    echo "<p>Mot de passe : ".$_POST['password']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner votre mot de passe !</p>";
                }


                if($erreurs == false)
                {
                   
                    $user = new Users();
                    $users = $user->signIn(  
                        $_POST['mail'],
                        $_POST['password']);

                    // Création d'une variable de session
                    $_SESSION['admin'] = true;
                    $_SESSION['mail'] = $_POST['mail'];
                    echo "<p>L'admin " . $_SESSION['username'] . " est connecté.</p>";

                    // Redirection vers index.php
                    echo "<p><a href='./admin_index.php'>Accueil</a></p>";
                }
                else{
                    echo "<p><a href='./connection.php'>Retour au formulaire</a></p>";
                }
            }
        ?>    
    </body>
</html>