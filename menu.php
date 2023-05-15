<nav>
  <div >
    <button type="button">
    </button>
    <div>
      <ul>
        <li><button type="button"> <a href="affichage-rencontre.php">Rencontres</a> </button></li>
        <li><button type="button" > <a href="affichage-joueur.php">Joueurs</a> </button></li>
        <li> <button type="button" > <a  href="affichage-equipe.php">Equipes</a> </button></li>
      </ul>
      <ul>
        <?php
        session_start(); // Démarrer la session
          if (isset($_SESSION['Admin']) && $_SESSION['Admin'] === true) {

          // Si l'admin est connecté
        ?>
        <div>
        <?php
          echo '<li> <a href="ajouter.php" >Ajouter un joueur </a></li>';
          echo '<li> <a href="modifier.php" >Modifier un joueur </a></li>';
          echo '<li> <a href="supprimer.php" >Supprimer un joueur </a></li>';
          ?>
        </div>
        
          <button type="button">
          <?php
            echo '<li><a href="deconnexion.php"> Déconnexion </a></li>';
          ?>
          </button>
        <?php
        } else {

          // Si l'admin n'est pas connecté
        ?>
        <div>
        <?php
          echo '<li"><a href="inscription.php"> Inscription </a></li>';
          echo '<li"><a href="connexion.php"> Connexion </a></li>';
        ?>
        </div>
        <?php
        }
      
        ?>
      </ul>
  </div>
</nav>
