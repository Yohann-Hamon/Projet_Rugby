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
            <!-- <form method="POST"> -->
                <label for="pools">Liste des pools : </label>
                <select name="pools" id="pools" onchange="traiterSelection()">
                <?php
                    foreach($teams_pool  as $a_pool )
                    {
                        echo '<option value="'.$a_pool['pool'].'"> Pool '.$a_pool['pool'].'</option>';
                    
                    }
                ?>
                </select>
            <!-- </form> -->
        <?php
            // if (isset($_POST['pools'])) { 

                // $selectedValue = $_POST['selectedValue'];

                // print($selectedValue);

                foreach($teams_ranked as $a_team)
                {
                    // if($a_team['pool'] === $selectedValue)
                    // {
                        include './front/components/molecules/team/team.php';   
                    // }
                }

            //   }
            
            
        ?>
    </div>

    <div>
        <?php
            include './front/components/molecules/team/add_team.php';
            
            include './front/components/molecules/team/edit_team.php';

            include './front/components/molecules/team/delete_team.php';
        ?>
    </div>
    
</section>

<script src="./front/components/organisms/teams/teams.js"></script>