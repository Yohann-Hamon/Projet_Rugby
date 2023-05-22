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
        <a tabindex="0" href="modifier.php">
            Le joueur n'a pas été modifié, veuillez réessayer.
        </a> 
        <?php 
    }    
    if($erreurs == false)
    {
        $joueur = new Joueurs();
        $joueurs = $joueur->ajout( 
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

        <a tabindex="0" href="index.php">
            Le joueur <?php echo $_SESSION['nom']; ?> a été ajouté !
        </a>

        <?php
    }
    else {
        $erreurs = true;
    }


    if(isset($_POST['update_joueur']))
    {
        $joueur_id = mysqli_real_escape_string($con, $_POST['joueur_id']);
    
        $prenom = mysqli_real_escape_string($con, $_POST['prenom']);
        $nom = mysqli_real_escape_string($con, $_POST['nom']);
        $poste = mysqli_real_escape_string($con, $_POST['poste']);
        $club = mysqli_real_escape_string($con, $_POST['club']);
        $age= mysqli_real_escape_string($con, $_POST['age']);
        $poids= mysqli_real_escape_string($con, $_POST['poids']);
        $taille = mysqli_real_escape_string($con, $_POST['taille']);
    
    
        $query = "UPDATE joueurs SET prenom='$prenom', nom='$nom, poste='$poste', club='$club', age='$age, poids='$poids', taille='$taille' WHERE id='$joueur_id' ";
        $query_run = mysqli_query($con, $query);
    
        
            header("Location: menu.php");
    
    }
    
    if(isset($_POST['delete_joueur']))
    {
        $joueur_id = mysqli_real_escape_string($con, $_POST['delete_joueur']);
    
        $query = "DELETE FROM joueur WHERE id='$joueur_id' ";
        $query_run = mysqli_query($con, $query);
        header("Location: first.php");
        
    }    
}