<?php
    include './front/components/molecules/buttons/poolbutton/poolbutton.php';

    require_once './bdd/Teams.php';
                
                
        $team = new Teams();
        $teams = $team->findAll();

        $team = new Teams();
        $teams_ranked = $team->ranking();

        $team = new Teams();
        $teams_pool = $team->pool();
?>

<section class="o-teams">
    <div class="team-background"></div>
    <h1 class="o-teams title  primary900">Les équipes</h1>
        
    <div class="o-teams__pools js-pools">
        <?php
            foreach($teams_pool as $a_pool)
            {
                poolbuttonComponent($a_pool['pool'],$a_pool['pool']);    
            } 
        ?>
        
    </div>
   
    <div class="o-teams__table js-teams">
        <?php
                foreach($teams_ranked as $a_team)
                {
                    include './front/components/molecules/team/team.php';   
                }

                    //     if($une_equipe['Id'] == $un_joueur['Equipe_id'])
                    //     {
                            // include './front/components/molecules/team/team.php';    
                    //     }
                //     } 
                // }  
            ?>

    </div>
    <?php
        
    ?>
</section>

<!-- <script src="./front/components/organisms/teams/teams.js"></script> -->