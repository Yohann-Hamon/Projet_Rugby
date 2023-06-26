<?php
	session_start();
?>

<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="UTF-8" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>Equipe</title>
    </head>
    <body>
        <?php
          require_once './components/BDD/BDD.php';
          require_once './components/equipes/Equipes.php';
          require_once './components/joueurs/Joueurs.php';
          require_once './components/rencontres/Rencontres.php';
        ?>
          <div class="container">
          <div class="background"></div> 
            <!-- <div id="particles-js" class="particles-js"></div> -->
            <div class="wrapper">
              <div class="hero">

                
                <?php
                  if(isset($_SESSION['Admin']))
                  {
                    echo '<p>'.$_SESSION['email'].' ADMIN connecté </p>';
                    echo '<a href="components/connexion/deconnexion.php" class="button">deconnexion</a>';
                  }
                  else
                  {
                    echo '<a href="components/connexion/connexion.php" class="button">connexion</a> | ';
                    echo '<a href="components/connexion/inscription.php" class="button">inscription</a>';  
                  }
                ?>

                <h1 class="hero-title"> Coupe du monde</h1>
              </div>
              <div class="sections">
                <div class="equipes">
                  <h1 class="section-title">Equipes</h1>
                  <div class="section-content">
                    <?php
                      $equipes = new equipes();
                      $equipess_ranked = $equipes->ranking();

                      $joueur = new Joueurs();
                      $joueurs = $joueur->findAll();

                      foreach($equipess_ranked as $une_equipes){

                        echo'<div class="equipes-content">
                          <p class="id"> ID : '.$une_equipes['id'].'</p>
                          <img class="emblem" src="<?php echo $embleme; ?>
                          <p class="title" >'.$une_equipes['pays'].'</p>
                          <p class="ranking"> Classement Mondial : '.$une_equipes['classement_mondial'].'</p>
                          <br>
                        </div>';
                    
                        foreach($joueurs as $un_joueur)
                        {

                          if($une_equipes['id'] == $un_joueur['pays_id'])
                          {
                            echo'<table class="table  table-hover">
                              <thead>
                                <tr class="table-dark">
                                  <td class="table-dark"> NOM </td>
                                  <td class="table-dark"> PRENOM </td>
                                  <td class="table-dark"> POSTE </td>
                                  <td class="table-dark"> equipes ID </td>
                                <tr>
                              </thead>
                              <tbody>
                                <tr class="table-dark">
                                  <td class="table-dark">'.$un_joueur['nom'].'</td>
                                  <td class="table-dark">'.$un_joueur['prenom'].'</td>
                                  <td class="table-dark">'.$un_joueur['poste'].'</td>
                                  <td class="table-dark">'.$un_joueur['pays_id'].'</td>
                                <tr>
                              </tbody>  
                              <br>
                            </table>';

                          }
                        } 
                      }  
                    ?>
