<div> SUPPRIMER a meeting
<br>
<br>
    <form action="./bdd/meetings/meeting_processing.php" method="POST">
    <br>
    <label for="meetings">meetings : </label>
    <select name="meetings" id="meetings">
        <?php
        
            foreach($meetings as $key=> $a_meeting )
            {
            echo '<option value="'.$a_meeting['id'].'">#'.$a_meeting['id'].'-  '.$a_meeting['datetime'].'   |'.$a_meeting['team_1'].'VS'.$a_meeting['team_2'].'|   '.$a_meeting['place'].' | Score : '.$a_meeting['score'].'</option>';                            
            }     
        ?>
    </select>
    <br>
    <br>
    <input type="submit" name="delete" value="delete">
</form>         
</div>