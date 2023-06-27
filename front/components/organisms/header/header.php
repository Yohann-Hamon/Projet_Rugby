<?php
  include './front/components/molecules/buttons/navbutton/navbutton.php';
?>

<header class="o-header">
  <div class="o-header__logo">
    <img src="#" alt="logo">
  </div>
  
  <div class="o-header__user">
    <?php
      navButtonComponent('#','équipes');
      navButtonComponent('#','joueurs');
      navButtonComponent('#','rencontres');
    ?>
  </div>
</header>


