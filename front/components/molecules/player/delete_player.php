<div> SUPPRIMER a player
<br>
<br>
    <form action="player_processing.php" method="POST">
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
    <input type="submit" name="delete" value="delete">
</form>         
</div>