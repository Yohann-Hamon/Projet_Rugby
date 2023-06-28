<br>
<br>
<div class="add-player"> AJOUTER a player
<br>
<br>
<form action="player_processing.php" method="POST">
    <br>
    <label for="teams">teams : </label>
    <select name="teams" id="teams">
        <?php
        
            foreach($teams as $a_team )
            {
                echo '<option value="'.$a_team['id'].'">'.$a_team['country'].'</option>';
            }
        
        ?>
    </select>
    <br>
    <br>
    <label for="lastname">lastname : </label>
    <input type="text" name="lastname" id="lastname">
    <br>
    <br>
    <label for="firstname">firstname : </label>
    <input type="text" name="firstname" id="firstname">
    <br>
    <br>
    <label for="position">position : </label>
    <select name="position" id="position">
        <?php
        
            foreach($players_position as $a_player )
            {
                echo '<option value="'.$a_player['position'].'">'.$a_player['position'].'</option>';
            }  
        
        ?>
    </select>
    <br>
    <br>
    <label for="club">club : </label>
    <select name="club" id="club">
        <?php

            foreach($players_club as $a_player )
            {
                echo '<option value="'.$a_player['club'].'">'.$a_player['club'].'</option>';
            }
        ?>
    </select>
    <br>
    <br>
    <label for="weight">weight (65 à 140 kg) : </label>
    <input type="number" name="weight" id="weight" min="65" max="140">
    <br>
    <br>
    <label for="age">Age (18 à 35 ans) : </label>
    <input type="number" name="age" id="age" min="18" max="35">
    <br>
    <br>
    <label for="height">height (165 à 300 cm) : </label>
    <input type="number" name="height" id="height" min="165" max="300">
    <br>
    <br>
    <label for="picture">Picture : </label>
    <input type="text" name="picture" id="picture">
    <br>
    <br>
    <input type="checkbox" name="cgu" id="cgu" value="cgu">
    <label for="cgu">Politique de confidentialitée</label>
    <br>
    <br>
    <input type="submit" name="add" value="add">
</form> 
</div>