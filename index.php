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

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title> Rugby World Cup 2023 by ESIN</title>
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