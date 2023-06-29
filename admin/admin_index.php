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
        <!-- admin-page.css -->
        <link rel="stylesheet" href="../front/style/admin-page.css">
        
        <!-- COMPONENTS -->
        <!-- buttons -->
        <link rel="stylesheet" href="../front/components/molecules/buttons/navbutton/navbutton.css">
        <!-- meeting -->
        <link rel="stylesheet" href="../front/components/molecules/team/team.css">

        <!-- team -->
        <link rel="stylesheet" href="../front/components/molecules/team/team.css">

        <!-- player -->
        <link rel="stylesheet" href="../front/components/molecules/player/player.css">

        <!-- Header -->
        <link rel="stylesheet" href="../front/components/organisms/header/header.css">
        <!-- meetings -->
        <link rel="stylesheet" href="../front/components/organisms/meetings/meetings.css">
        <!-- teams -->
        <link rel="stylesheet" href="../front/components/organisms/teams/teams.css">
        <!-- players -->
        <link rel="stylesheet" href="../front/components/organisms/players/players.css">

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title> Admin session</title>
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




