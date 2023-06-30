<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title> Connexion des admins </title>
</head>
<?php
    include '../includes/config.php';
?>
<body class="p-3 mb-2 bg-primary text-white">
<div class=" position-absolute top-50 start-50 translate-middle border border-primary border-3">
<h1 class="title text-center">Se connecter</h1>    
<br>
<br>
<br>
<form action="user_processing.php" method="POST" >
        <label for="mail" class=" text-center fs-3"> Email : </label>
        <input type="mail" class=" text-center fs-3" name="mail" id="mail">
        <br>
        <label for="password" class=" text-center fs-3"> Mot de passe :  </label>
        <input type="password" class=" text-center fs-3" name="password" id="password">
<br>
<br>
<br>
        <input type="submit" class=" text-center btn btn-dark fs-3" name="connection" value="Se connecter">
    </form>
</div>
</body>
</html>
 