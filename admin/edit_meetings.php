<?php
    include '../includes/config.php';

    if(!isset($_SESSION['admin'])){
        header('HTTP/1.0 404 Not Found');
        header('Location: ../error404.php');
        exit;
    }

    require_once '../bdd/Meetings.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modification rencontre</title>
    </head>
    <body>

        <?php

            $id = $_POST['meetings'];       

            if(isset($_POST['choose']))
            {   
                

                $meeting = new Meetings();
                $meetings = $meeting->findAll();

                $erreurs = false;

                if(isset($_POST['meetings']) && !empty($_POST['meetings']))
                {
                    foreach($meetings as $a_meeting)
                    {
                        if($a_meeting['id'] == $id)
                        {
                            ?>  
                                <form action="meeting_processing.php" method="POST">
                                    <label for="id">ID : </label>
                                    <select name="id" id="id">
                                    <?php
                                        echo '<option value="'.$a_meeting['id'].'" hidden>'.$a_meeting['id'].'</option>';
                                    ?>
                                    </select>
                                    <br>
                                    <br>
                                    <br>
                                    <label for="datetime">Date : </label>
                                    <input type="datetime" name="datetime" id="datetime">
                                    <br>
                                    <br>
                                    <label for="team_1">Equipe 1 : </label>
                                    <input type="number" name="team_1" id="team_1">
                                    <br>
                                    <br>
                                    <label for="team_2">Equipe 2 : </label>
                                    <input type="number" name="team_2" id="team_2">
                                    <br>
                                    <br>
                                    <label for="place">Lieu : </label>
                                    <input type="text" name="place" id="place">
                                    <br>
                                    <br>
                                    <label for="score">Score : </label>
                                    <input type="text" name="score" id="score">
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
                    echo "<p>Veuillez sélectionnez la rencontre !</p>";
                }
            }
        ?>    
    </body>
</html>
