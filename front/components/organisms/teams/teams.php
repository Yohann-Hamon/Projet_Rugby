<section class="o-teams">
    <h2 class="o-teams__title title neutral100">LISTES DES EQUIPES</h2>

    <div class="o-teams__table">
        <?php
            require_once './bdd/Teams.php';
            
            
            
                 
            $team = new Teams();
            $teams = $team->findAll();

            $team = new Teams();
            $teams_ranked = $team->ranking();

            $team = new Teams();
            $teams_pool = $team->pool();
        
        ?>
             
        <?php
                

                foreach($teams_ranked as $a_team)
                {
                    // if($a_team['pool'] === $selectedValue)
                    // {
                        $a_team['pool'] = 'A';

                        include './front/components/molecules/team/team.php';   
                    // }
                }

             
            
            
        ?>
    </div>
    
</section>

<script src="./front/components/organisms/teams/teams.js"></script>