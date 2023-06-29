<section class="o-players">
    <h2 class="o-players__title title neutral100">LISTES DES JOEURS</h2>

    <div class="o-players__table">
        <?php
        
            require_once '../bdd/Players.php';
            // require_once './bdd/Teams.php';

            $team = new Teams();
            $teams = $team->findAll();

            $player = new Players();
            $players_position = $player->position();

            $player = new Players();
            $players_club = $player->club();

            $player = new Players();
            $players = $player->findAll();

            foreach($players as $a_player){

                include '../front/components/molecules/player/player.php';
            }
        ?>
    </div>
    <div>
        <?php
            include '../front/components/molecules/player/add_player.php';
            
            include '../front/components/molecules/player/edit_player.php';

            include '../front/components/molecules/player/delete_player.php';
        ?>
    </div>

</section>

<?php