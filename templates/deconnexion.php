<?php

session_start();
session_destroy();
echo'Vous avez bien été deconnecté';
header('Location: /index.php');
?>

<a href="/index.php">Revenir à l'accueil</a> 