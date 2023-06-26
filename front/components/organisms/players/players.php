<section class="o-players">
    <h2 class="o-players__title title neutral100">SCORE DES RENCONTRES</h2>

    <div class="o-players__table">
        <?php
            include './bdd/players/Players.php';

            $player = new Players();
            $players = $player->findAll();

            foreach($players as $a_player){

                include './front/components/molecules/player/player.php';
            }
        ?>
    </div>

</section>

<?php