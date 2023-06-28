<div> MODIFIER a team
<br>
<br>
    <form action="./bdd/teams/edit_teams.php" method="POST">
    <br>
    <label for="teams">teams : </label>
    <select name="teams" id="teams">
        <?php
        
            foreach($teams as $key=> $a_team )
            {
            echo '<option value="'.$a_team['id'].'">#'.$a_team['id'].'-  '.$a_team['world_rank'].' '.$a_team['country'].' '.$a_team['pool'].'</option>';                            
            }
        
        ?>
    </select>
    <br>
    <br>
    <input type="submit" name="choose" value="choose">
</form> 
</div>