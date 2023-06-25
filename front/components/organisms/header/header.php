<?php
  include './front/components/molecules/buttons/navbutton/navbutton.php';
?>

<link rel="stylesheet" href="./front/components/molecules/buttons/navbutton/navbutton.css">

<body>
  <header class="o-header">
    
    <div class="o-header__logo">
      <img src="#" alt="logo">
    </div>
    
    <div class="o-header__user">
      <?php
        navbuttonComponent('#','Sign in');
        navbuttonComponent('#','Sign up');
      ?>
    </div>

  </header>
</body>


