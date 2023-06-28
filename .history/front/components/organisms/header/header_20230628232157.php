<?php
  include './front/components/molecules/buttons/navbutton/navbutton.php';
?>

<header class="o-header">
  <div class="o-header__logo">
    <img src="./front/style/images/logo.svg" alt="logo">
    <h1 class=" nav-title primary900">Le XV d'oeuFrance</h1>
  </div>
  
  <div class="o-header__user">
    <?php
      navButtonComponent('#','rencontres');
      navButtonComponent('#','équipes');
      navButtonComponent('#','joueurs');
    ?>
  </div>
</header>


