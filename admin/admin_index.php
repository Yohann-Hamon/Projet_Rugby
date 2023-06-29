<?php
	session_start();

    if(!isset($_SESSION['admin'])){
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
        
        <title> Admin </title>
    </head>
    <body>
        <?php
                echo '<p>'.$_SESSION['username'].' ADMIN connecté </p>';
                echo '<a href="disconnection.php" class="button">deconnexion</a>';
                
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




