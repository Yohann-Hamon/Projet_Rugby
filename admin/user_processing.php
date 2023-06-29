<?php
    session_start();

    // if(!isset($_SESSION['admin'])){
    //     header('HTTP/1.0 404 Not Found');
    //     header('Location: ../error404.php');
    //     exit;
    // }

    require_once '../bdd/Users.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Traitement du formulaire</title>
    </head>
    <body>
        <?php
            if(isset($_POST['registration'])){
                echo "<p>Le formulaire a été envoyé</p>";

                $erreurs = false;

                if(isset($_POST['username']) && !empty($_POST['username'])){
                    echo "<p>Identifiant : ".$_POST['username']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner l'identifiant</p>";
                }

                if(isset($_POST['mail']) && !empty($_POST['mail'])){
                    echo "<p>mail : ".$_POST['mail']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner l'mail'</p>";
                }


                if(isset($_POST['password']) && !empty($_POST['password'])){
                    echo "<p>Mot de passe : ".$_POST['password']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner le mot de passe</p>";
                }


                if($erreurs == false)
                {
                    $user = new Users();
                    $users = $user->signUp( 
                        $_POST['username'], 
                        $_POST['mail'],
                       $_POST['password']);

                    // Création d'une variable de session
                    // $_SESSION['admin'] = true;
                    $_SESSION['username'] = $_POST['username'];
                    echo '<p>Vous avez ' . $_SESSION['username'] . ' a bien été inscrit</p>';
                    // $_SESSION['Admin'] = true;
                    // $_SESSION['nom'] = $_POST['nom'];

                    // Redirection vers index.php
                    echo "<p><a href='./connection.php'>connection</a></p>";
                    echo "<p><a href='../index.php'>Retour à l'accueil</a></p>";
                }
                else{
                    echo "<p><a href='./registration.php'>Retour au formulaire</a></p>";
                }
            }

            if(isset($_POST['connection'])){
                echo "<p>Le formulaire a été envoyé</p>";

                $erreurs = false;

                // if(isset($_POST['pseudo']) && !empty($_POST['pseudo'])){
                //     echo "<p>Identifiant : ".$_POST['pseudo']."</p>";
                // }
                // else{
                //     $erreurs = true;
                //     echo "<p>Veuillez renseigner l'identifiant</p>";
                // }

                if(isset($_POST['mail']) && !empty($_POST['mail'])){
                    echo "<p>mail : ".$_POST['mail']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner l'mail'</p>";
                }

                if(isset($_POST['password']) && !empty($_POST['password'])){
                    echo "<p>Mot de passe : ".$_POST['password']."</p>";
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez renseigner le mot de passe</p>";
                }


                if($erreurs == false)
                {
                    // echo 'if error = false <br>';

                    $user = new Users();
                    $users = $user->signIn( 
                        // $_POST['pseudo'], 
                        $_POST['mail'],
                        // $_POST['username'],
                        $_POST['password']);

                    // Création d'une variable de session
                    $_SESSION['admin'] = true;
                    $_SESSION['mail'] = $_POST['mail'];
                    echo '<p>Vous avez ' . $_SESSION['username'] . ' bien été connecté</p>';
                    // $_SESSION['Admin'] = true;
                    // $_SESSION['nom'] = $_POST['nom'];

                    // Redirection vers index.php
                    echo "<p><a href='./admin_index.php'>accueil</a></p>";
                }
                else{
                    echo "<p><a href='./connection.php'>Retour au formulaire</a></p>";
                }
            }
        ?>    
    </body>
</html>