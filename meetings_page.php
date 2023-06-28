<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- style.css -->
        <link rel="stylesheet" href="./front/style/colors.css">
        
        <!-- meetings-page.css -->
        <link rel="stylesheet" href="./front/style/meetings-page.css">
        
        <!-- COMPONENTS -->
        <!-- buttons -->
        <link rel="stylesheet" href="./front/components/molecules/buttons/navbutton/navbutton.css">
        <!-- meeting -->
        <link rel="stylesheet" href="./front/components/molecules/meeting/meeting.css">
        
        <!-- Header -->
        <link rel="stylesheet" href="./front/components/organisms/header/header.css">
        <!-- meetings -->
        <link rel="stylesheet" href="./front/components/organisms/meetings/meetings.css">

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title> Meetings page </title>
    </head>
    <body>
        <?php
            // header
            include './front/components/organisms/header/header.php'; ?>      

        <?php

            // meetings
            include './front/components/organisms/meetings/meetings.php';

            //footer
            include './front/components/organisms/footer/footer.php';

        ?>  
    </body>
</html>