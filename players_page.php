<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- style.css -->
        <link rel="stylesheet" href="./front/style/colors.css">
        
        <!-- main.css -->
        <link rel="stylesheet" href="./front/style/main.css">
        
        <!-- players-page.css -->
        <link rel="stylesheet" href="./front/style/players-page.css">
        
        <!-- COMPONENTS -->
        <!-- buttons -->
        <link rel="stylesheet" href="./front/components/molecules/buttons/navbutton/navbutton.css">
        <!-- player -->
        <link rel="stylesheet" href="./front/components/molecules/player/player.css">
        
        <!-- Header -->
        <link rel="stylesheet" href="./front/components/organisms/header/header.css">
        <!-- players -->
        <link rel="stylesheet" href="./front/components/organisms/players/players.css">

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title> Les Joueurs </title>
    </head>
    <body>
        <?php
            // header
            include './front/components/organisms/header/header.php'; ?>      

        <?php

            // players
            include './front/components/organisms/players/players.php';

            //footer
            include './front/components/organisms/footer/footer.php';

        ?>  
    </body>
</html>