<?
    include '../includes/config.php';
?>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title> Inscription des admins </title>
</head>

<body class="p-3 mb-2 bg-primary text-white text-center fs-3">
<div class=" position-absolute top-50 start-50 translate-middle border border-primary border-3">
<form action="user_processing.php" method="POST" >
<h1 class="title text-center">S'inscrire</h1> 
<br>
    <label for="mail"> E-mail : </label>
    <input type="mail" name="mail" id="mail">
    <br>
    <label for="username" > Identifiant : </label>
    <input type="username" name="username" id="username" >
    <br>
    <label for="password" > Mot de passe : </label>
    <input type="password" name="password" id="password" >
<br>
<br>
<br>
    <input type="submit" class=" position-absolute top-100 start-50 translate-middle text-center btn btn-dark fs-3" name="registration" value="S'inscrire">
</form>
</div>
</body>
</html>