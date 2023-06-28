<div> SUPPRIMER a team
<br>
<br>
    <form action="team_processing.php" method="POST">
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
    <input type="submit" name="delete" value="delete">
</form>         
</div>