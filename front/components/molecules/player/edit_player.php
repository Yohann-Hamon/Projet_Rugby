<div> MODIFIER a player
<br>
<br>
    <form action="edit_players.php" method="POST">
    <br>
    <label for="players">players : </label>
    <select name="players" id="players">
        <?php
        
            foreach($players as $key=> $a_player )
            {
            echo '<option value="'.$a_player['id'].'">#'.$a_player['id'].'-  '.$a_player['lastname'].'  '.$a_player['firstname'].'</option>';                            
            }
        
        ?>
    </select>
    <br>
    <br>
    <input type="submit" name="choose" value="choose">
</form> 
</div>