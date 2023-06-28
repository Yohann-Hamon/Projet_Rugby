<?
require_once 'Utilisateurs.php';
?>

<body>
<form action="gestion_utilisateurs.php" method="POST" >

    <label for="mail"> E-mail </label>
    <input type="email" name="mail" id="mail">
    <br>
    <label for="pseudo" > Pseudo </label>
    <input type="pseudo" name="pseudo" id="pseudo" >
    <br>
    <label for="password" > Mot de passe : </label>
    <input type="password" name="password" id="password" >

    <input type="submit" name="inscription" value="S'inscrire">
</form>
</body>
</html>