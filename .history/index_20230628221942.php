<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- style.css -->
        <link rel="stylesheet" href="./front/style/colors.css">
        
        <!-- main.css -->
        <link rel="stylesheet" href="./front/style/main.css">
        
        <!-- COMPONENTS -->
        <!-- buttons -->
        <link rel="stylesheet" href="./front/components/molecules/buttons/navbutton/navbutton.css">
        <!-- meeting -->
        <!-- team -->
        <link rel="stylesheet" href="./front/components/molecules/team/team.css">

        <link rel="stylesheet" href="./front/components/molecules/insta/insta.css">
        <!-- player -->
        <link rel="stylesheet" href="./front/components/molecules/player/player.css">

        <!-- Header -->
        <link rel="stylesheet" href="./front/components/organisms/header/header.css">
        <!-- Hero -->
        <link rel="stylesheet" href="./front/components/organisms/hero/hero.css">
        <!-- meetings -->
        <link rel="stylesheet" href="./front/components/organisms/meetings/meetings.css">
        <!-- teams -->
        <link rel="stylesheet" href="./front/components/organisms/teams/teams.css">
        <!-- players -->
        <link rel="stylesheet" href="./front/components/organisms/players/players.css">

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title> Rugby World Cup 2023 by ESIN</title>
    </head>
    <body>
        <?php
            // header
            include './front/components/organisms/header/header.php';

            // hero
            include './front/components/organisms/hero/hero.php';

            // post instagram
            include './front/components/molecules/insta/insta.php';

            //footer
            include './front/components/organisms/footer/footer.php';

        ?>  
    </body>
</html>