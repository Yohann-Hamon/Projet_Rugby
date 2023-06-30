<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
</head>
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
 