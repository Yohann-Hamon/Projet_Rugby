<?php
    include '../includes/config.php';

    if(!isset($_SESSION['admin']))
    {
        header('HTTP/1.0 404 Not Found');
        header('Location: ../error404.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- style.css -->
        <link rel="stylesheet" href="../front/style/colors.css">
        <link rel="stylesheet" href="../front/style/admin-page.css">
        
        <!-- COMPONENTS -->
        <link rel="stylesheet" href="../front/components/molecules/buttons/navbutton/navbutton.css">
        <link rel="stylesheet" href="../front/components/molecules/team/team.css">
        <link rel="stylesheet" href="../front/components/molecules/team/team.css">
        <link rel="stylesheet" href="../front/components/molecules/player/player.css">

        <link rel="stylesheet" href="../front/components/organisms/header/header.css">
        <link rel="stylesheet" href="../front/components/organisms/meetings/meetings.css">
        <link rel="stylesheet" href="../front/components/organisms/teams/teams.css">
        <link rel="stylesheet" href="../front/components/organisms/players/players.css">

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title> Page d'Admin </title>
    </head>
    <body class="p-3 mb-2 bg-primary text-white text-center fs-3">
        <?php
                echo '<p>'.$_SESSION['username'].' ADMIN connecté </p>';
                echo '<a href="disconnection.php" class="  position-absolute top-100 start-50 translate-middle text-center btn btn-dark fs-3 button">deconnexion</a>';
                
                //meetings
                include './admin_components/meetings/admin_meetings.php';
                //  //teams
                include './admin_components/teams/admin_teams.php';
                // // //players
                include './admin_components/players/admin_players.php';
                //footer
                include '../front/components/organisms/footer/footer.php';
        ?>
    </body>
</html>




