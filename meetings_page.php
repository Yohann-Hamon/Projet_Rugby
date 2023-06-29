<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- style.css -->
        <link rel="stylesheet" href="./front/style/colors.css">
        
        <!-- main.css -->
        <link rel="stylesheet" href="./front/style/main.css">
        
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
        <!-- Footer -->
        <link rel="stylesheet" href="./front/components/organisms/footer/footer.css">
        
        <link rel="apple-touch-icon" sizes="180x180" href="./style/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./style/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./style/favicon/favicon-16x16.png">
        <link rel="manifest" href="./style/favicon/site.webmanifest">
        <link rel="mask-icon" href="./style/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title> Les Rencontres </title>
    </head>
    <body>
        <?php
            // header
            include './front/components/organisms/header/header.php'; 

            // meetings
            include './front/components/organisms/meetings/meetings.php';

            //footer
            include './front/components/organisms/footer/footer.php';

        ?>  
    </body>
</html>