<?php
            session_start();
            // var_dump($_SESSION);
            // var_dump($_POST);
            // require_once '../BDD.php';
            require_once '../bdd/Players.php';
            require_once '../bdd/Teams.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>edit player</title>
    </head>
    <body>

        <?php
            
                   

            if(isset($_POST['choose']))
            {   
                $id = $_POST['players'];

                $team = new Teams();
                $teams = $team->findAll();

                $player = new Players();
                $players = $player->findAll();

                $player = new Players();
                $players_position = $player->position();

                $player = new Players();
                $players_club = $player->club();

                $erreurs = false;

                if(isset($_POST['players']) && !empty($_POST['players']))
                {
                    foreach($players as $a_player)
                    {
                        if($a_player['id'] == $id)
                        {
                            ?>  
                                <form action="player_processing.php" method="POST">
                                    <label for="id">ID : </label>
                                    <select name="id" id="id">
                                    <?php
                                        echo '<option value="'.$a_player['id'].'" hidden>'.$a_player['id'].'</option>';
                                    ?>
                                    </select>
                                    <br>
                                    <br>
                                    <label for="teams">teams : </label>
                                    <select name="teams" id="teams">
                                    <?php
                                        foreach($teams as $a_team)
                                        {
                                            if($a_player['country_id'] == $a_team['id'])
                                            {
                                                echo '<option value="'.$a_player['country_id'].'" hidden>'.$a_team['country'].'</option>';
                                                foreach($teams as $a_team)
                                                {
                                                    echo '<option value="'.$a_team['id'].'">'.$a_team['country'].'</option>';    
                                            
                                                }
                                            } 
                                        }
                                    ?>
                                    </select>
                                    <br>
                                    <br>
                                    <label for="lastname">lastname : </label>
                                    <input type="text" name="lastname" id="lastname"
                                    value="<?php
                                        echo $a_player['lastname'];
                                    ?>">
                                    <br>
                                    <br>
                                    <label for="firstname">firstname : </label>
                                    <input type="text" name="firstname" id="firstname"
                                    value="<?php
                                        echo $a_player['firstname'];
                                    ?>">
                                    <br>
                                    <br>
                                    <label for="position">positions : </label>
                                    <select name="position" id="position">
                                    <?php
                                        echo '<option value="'.$a_player['position'].'" hidden>'.$a_player['position'].'</option>';
                                        foreach($players_position  as $a_player1 )
                                        {
                                            echo '<option value="'.$a_player1['position'].'">'.$a_player1['position'].'</option>';
                                        }
                                    ?>
                                    </select>
                                    <br>
                                    <br>
                                    <label for="club">Clubs : </label>
                                    <select name="club" id="club">
                                    <?php
                                        echo '<option value="'.$a_player['club'].'" hidden>'.$a_player['club'].'</option>';
                                        foreach($players_club as $a_player1)
                                        {
                                            echo '<option value="'.$a_player1['club'].'">'.$a_player1['club'].'</option>';
                                        }  
                                    ?>
                                    </select>
                                    <br>
                                    <br>
                                    <label for="age">Age (18 à 35 ans) : </label>
                                    <input type="number" name="age" id="age" min="18" max="35"
                                    value="<?php
                                        echo $a_player['age'];
                                    ?>">
                                    <br>
                                    <br>
                                    <label for="height">height (165 à 300 cm) : </label>
                                    <input type="number" name="height" id="height" min="165" max="300"
                                    value="<?php
                                        echo $a_player['height'];
                                    ?>">
                                    <br>
                                    <br>
                                    <label for="weight">weight (65 à 140 kg) : </label>
                                    <input type="number" name="weight" id="weight" min="65" max="140"
                                    value="<?php
                                        echo $a_player['weight'];
                                    ?>">
                                    <br>
                                    <br>
                                    <label for="picture">Picture : </label>
                                    <input type="text" name="picture" id="picture" 
                                    value="<?php
                                        echo $a_player['picture'];
                                    ?>">
                                    <br>
                                    <br>
                                    <input type="checkbox" name="cgu" id="cgu" value="cgu">
                                    <label for="cgu">Politique de confidentialitée</label>
                                    <br>
                                    <br>
                                    <input type="submit" name="edit" value="edit">
                                
                                    
                                </form>
                            <?php
                        }     
                    }
                }
                else{
                    $erreurs = true;
                    echo "<p>Veuillez sélectionnez le player</p>";
                }
            }
        ?>    
    </body>
</html>
