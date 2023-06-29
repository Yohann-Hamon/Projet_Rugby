<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- style.css -->
        <link rel="stylesheet" href="./front/style/colors.css">
        
        <!-- main.css -->
        <link rel="stylesheet" href="./front/style/main.css">
        
        <!-- teams-page.css -->
        <link rel="stylesheet" href="./front/style/teams-page.css">
        
        <!-- COMPONENTS -->
        <!-- buttons -->
        <link rel="stylesheet" href="./front/components/molecules/buttons/navbutton/navbutton.css">
        <!-- team -->
        <link rel="stylesheet" href="./front/components/molecules/team/team.css">
        
        <!-- Header -->
        <link rel="stylesheet" href="./front/components/organisms/header/header.css">
        <!-- teams -->
        <link rel="stylesheet" href="./front/components/organisms/teams/teams.css">

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title> Les Equipes </title>
    </head>
    <body>
        <?php
            // header
            include './front/components/organisms/header/header.php'; ?>      

        <?php

            // teams
            include './front/components/organisms/teams/teams.php';

            //footer
            include './front/components/organisms/footer/footer.php';

        ?>  
    </body>
</html>