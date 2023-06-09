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
        <!-- insta -->
        <link rel="stylesheet" href="./front/components/molecules/insta/insta.css">

        <!-- Header -->
        <link rel="stylesheet" href="./front/components/organisms/header/header.css">
        <!-- Hero -->
        <link rel="stylesheet" href="./front/components/organisms/hero/hero.css">
        <!-- Footer -->
        <link rel="stylesheet" href="./front/components/organisms/footer/footer.css">
        
        <link rel="apple-touch-icon" sizes="180x180" href="./front/style/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./front/style/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./front/style/favicon/favicon-16x16.png">
        <link rel="manifest" href="./front/style/favicon/site.webmanifest">
        <link rel="mask-icon" href="./front/style/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Coupe du monde de Rugby 2023 par ESIN</title>
    </head>
    <body>
        <div class="container">
            <?php

                // hero
                include './front/components/organisms/hero/hero.php';
                
                // header
                include './front/components/organisms/header/header.php';

                // post instagram
                include './front/components/molecules/insta/insta.php';

                //footer
                include './front/components/organisms/footer/footer.php';

            ?>
        </div>
    </body>
</html>