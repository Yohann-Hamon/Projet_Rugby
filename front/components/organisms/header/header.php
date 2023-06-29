<?php
  include './front/components/molecules/buttons/navbutton/navbutton.php';
?>

<header class="o-header">
  <a href="./index.php">
    <div class="o-header__logo">
      <img class="logo" src="./front/style/images/logo.svg" alt="logo">
      <h1 class=" nav-title primary900">Le XV d'oeuFrance</h1>
    </div>
  </a>
  
  <div class="o-header__nav">
    <?php
      navButtonComponent('./meetings_page.php','rencontres');
      navButtonComponent('./teams_page.php','équipes');
      navButtonComponent('./players_page.php','joueurs');
    ?>
  </div>
</header>