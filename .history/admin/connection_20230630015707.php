<?php
    include '../includes/config.php';
?>
<body>
    <form action="user_processing.php" method="POST" >
        <label for="mail"> Email : </label>
        <input type="mail" name="mail" id="mail">
        <br>
        <label for="password"> Mot de passe :  </label>
        <input type="password" name="password" id="password">

        <input type="submit" name="connection" value="Se connecter">
    </form>
</body>
</html>
 