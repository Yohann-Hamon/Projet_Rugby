<?php
    include '../includes/config.php';

    if(!isset($_SESSION['admin'])){
        header('HTTP/1.0 404 Not Found');
        header('Location: ../error404.php');
        exit;
    }

    session_destroy();
    
    echo'Vous êtes deconnecté';
?>

<a href="../index.php">Revenir à l'accueil</a> 