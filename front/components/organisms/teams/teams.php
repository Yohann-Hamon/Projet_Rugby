<section class="o-teams">
    <h2 class="o-teams__title title neutral100">LISTES DES EQUIPES</h2>

    <div class="o-teams__table">
        <?php
            include './bdd/teams/Teams.php';

            $team = new Teams();
            $teams_ranked = $team->ranking();

            foreach($teams_ranked as $a_team){

                include './front/components/molecules/team/team.php';
            }
        ?>
    </div>

</section>

<?php