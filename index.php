<?php
    // include 'components/bdd/BDD.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- reset.css -->
        <link rel="stylesheet" href="./front/style/reset.css">
        
        <!-- style.css -->
        <link rel="stylesheet" href="./front/style/colors.css">
        <link rel="stylesheet" href="./front/style/text-styles.css">
        
        <!-- main.css -->
        <link rel="stylesheet" href="./front/style/main.css">
        
        <!-- COMPONENTS -->
        <!-- buttons -->
        <link rel="stylesheet" href="./front/components/molecules/buttons/navbutton/navbutton.css">

        <!-- Header -->
        <link rel="stylesheet" href="./front/components/organisms/header/header.css">
        <!-- Hero -->
        <link rel="stylesheet" href="./front/components/organisms/hero/hero.css">



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
        ?>  
    </body>
</html>