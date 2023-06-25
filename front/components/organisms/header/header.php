<!-- <link rel="stylesheet" href="./header.css"> -->
<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="./front/components/molecules/buttons/button.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <header class="o-header">
      
      <div class="o-header__logo">
        <img src="" alt="unstaged">
      </div>
      
      <!-- <div class="o-header__user">
        <button class="o-header__button">
          Login
        </button>
        <button class="o-header__button">
          Sign up
        </button>
      </div> -->

      <?php
          include './front/components/molecules/buttons/navbutton.php';
          // include './front/components/organisms/header/header.php';
          include './front/components/molecules/buttons/navbutton/navbutton.php';
              
          navbuttonComponent('#','button');
          // buttonComponent('Click me!');
        ?>

    </header>
  </body>
</html>

