<form action="traitement.php" method="POST">

  <div>
    <label for="photo" > Photo </label>
    <input type="text" name="photo" id="photo">
  </div>
  <div>
    <label for="prenom" > Prénom </label>
    <input type="text" name="prenom" id="prenom">
  </div>
  <div>
    <label for="nom" > Nom </label>
    <input type="text" name="nom" id="nom">
  </div>
  <div>
    <label for="poids" > Poids </label>
    <input type="text" name="poids" id="poids">
  </div>
  <div>
    <label for="taille" > Taille </label>
    <input type="text" name="taille" id="taille">
  </div>
  <div>
    <label for="age" > Âge </label>
    <input type="text" name="age" id="age">
  </div>
  <div>
    <label for="club" > Club </label>
    <input type="text" name="club" id="club">
  </div>
  <div>
  <div>
    <label for="pays_id"> Équipe </label>
        <?php
            $equipe = new Equipes();
            $equipes = $equipe->findAll();
            echo '<select name="equipe" >';
            foreach($equipes as $equipe) {
                echo '<option" value="' . $equipe['id'] . '">' . $equipe['nom'] . '</option>';
            }
            echo '</select>';
        ?>
  </div>
  <div>
    <label for="poste" > Poste </label>
    <input type="text" name="poste" id="poste">
  </div>

  <button type="submit">Ajouter</button>

</form>