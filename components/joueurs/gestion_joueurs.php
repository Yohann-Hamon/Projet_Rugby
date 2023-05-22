<?php
if(isset($_POST['ajouter'])) {
    $erreurs = false;

    if(isset
    ($_POST['photo'],
    $_POST['prenom'],
    $_POST['nom'],
    $_POST['poids'],
    $_POST['taille'],
    $_POST['age'],
    $_POST['club'],
    $_POST['pays_id'],
    $_POST['poste']) 
    && !empty($_POST['photo'])
    && !empty($_POST['prenom'])
    && !empty($_POST['nom'])
    && !empty($_POST['poids'])
    && !empty($_POST['taille'])
    && !empty($_POST['age'])
    && !empty($_POST['club'])
    && !empty($_POST['pays_id'])
    && !empty($_POST['poste'])){}
    else{
        $erreurs = true;
        ?>
        <a href="modifier.php">
            Le joueur n'a pas été modifié, veuillez réessayer.
        </a> 
        <?php 
    }    
    if($erreurs == false)
    {
        $joueur = new Joueurs();
        $joueurs = $joueurs->add( 
        $_POST['photo'],
        $_POST['prenom'],
        $_POST['nom'], 
        $_POST['poids'], 
        $_POST['taillle'], 
        $_POST['age'], 
        $_POST['club'],
        $_POST['pays_id'],
        $_POST['poste']);
        $_SESSION['formulaire'] = true;
        $_SESSION['nom'] = $_POST['nom'];
        ?>

        <a href="index.php">
            Le joueur <?php echo $_SESSION['prenom'],['nom']; ?> a été ajouté !
        </a>

        <?php
    }
    else {
        $erreurs = true;
    }

}