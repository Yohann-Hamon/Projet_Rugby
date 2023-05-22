<?php
// session_start();
include 'BDD.php';
include 'Utilisateurs.php';

if(isset($_POST['inscription'])){

    $erreurs = false;

    if(isset($_POST['email']) && !empty($_POST['email'])){
        // email valide
    } else {
        $erreurs = true;
    }

    if(isset($_POST['pseudo']) && !empty($_POST['pseudo']))
    {
        // pseudo valide
    } 
    else {
        $erreurs = true;
    }

    if(isset($_POST['password']) && !empty($_POST['password']))
    {
        // password valide
    } 
    else {
        $erreurs = true;
    }

    if($erreurs == false)
    {
        $Utilisateurs = new Utilisateur();
        $joueurs = $utilisateur->signIn( 
            $_POST['email'],
            $_POST['pseudo'],
            $_POST['password']);

        // Création d'une variable
        $_SESSION['utilisateurs'] = true;
        echo '<p>Vous avez été inscrit</p>';
        
        // Redirection 
        header('Location: /index.php');
    }
    else{
        ?>
        <a href="/index.php">
            Veuillez remplir tous les champs pour être inscrit(e).
        </a> 
        <?php
    }
}


if(isset($_POST['connexion'])){

    $erreurs = false;

    if(isset($_POST['email']) && !empty($_POST['email'])){
        $erreurs = false;
    } else {
        $erreurs = true;
    }

    if(isset($_POST['password']) && !empty($_POST['password']))
    {
        echo "<p class=\"invisible\">Mot de passe : ".$_POST['password']."</p>";
    } 
    else {
        $erreurs = true;
    }


    if($erreurs == false)
    {
        $Utilisateurs = new Utilisateurs();
        $joueurs = $utilisateurs->signUp( 
            $_POST['email'],
            $_POST['pseudo'],
            $_POST['password']);

        // Création d'une variable
        $_SESSION['utilisateurs'] = true;
        echo '<p>Vous avez été connecté</p>';

        // Redirection 
        header('Location: /index.php');
    }
    else{

        ?>
        <a>
            Veuillez remplir tous les champs pour être connecté(e).
        </a> 
        <?php
    }
}
