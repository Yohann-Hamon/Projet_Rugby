<section class="o-players">
    <h1 class="o-players title primary900">Les joueurs</h1>

    <div class="o-players__table">
        <?php
        
            require_once './bdd/Players.php';
            require_once './bdd/Teams.php';

            $team = new Teams();
            $teams = $team->findAll();

            $player = new Players();
            $players_position = $player->position();

            $player = new Players();
            $players_club = $player->club();

            $player = new Players();
            $players = $player->findAll();

            foreach($players as $a_player){

                include './front/components/molecules/player/player.php';
            }
        ?>
    </div>
    

</section>

<?php