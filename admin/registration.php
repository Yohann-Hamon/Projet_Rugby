<?
    // require_once 'Utilisateurs.php';
?>

<body>
<form action="user_processing.php" method="POST" >

    <label for="mail"> E-mail </label>
    <input type="mail" name="mail" id="mail">
    <br>
    <label for="username" > username </label>
    <input type="username" name="username" id="username" >
    <br>
    <label for="password" > Mot de passe : </label>
    <input type="password" name="password" id="password" >

    <input type="submit" name="registration" value="S'inscrire">
</form>
</body>
</html>