<?php
            session_start();
            // var_dump($_SESSION);
            // var_dump($_POST);
            // require_once '../BDD.php';
            require_once './Meetings.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>edit meeting</title>
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
                                    <br>
                                    <label for="datetime">date : </label>
                                    <input type="datetime" name="datetime" id="datetime">
                                    <br>
                                    <br>
                                    <label for="team_1">team 1 : </label>
                                    <input type="number" name="team_1" id="team_1">
                                    <br>
                                    <br>
                                    <label for="team_2">team 2 : </label>
                                    <input type="number" name="team_2" id="team_2">
                                    <br>
                                    <br>
                                    <label for="place">place : </label>
                                    <input type="text" name="place" id="place">
                                    <br>
                                    <br>
                                    <label for="score">score : </label>
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
                    echo "<p>Veuillez sélectionnez le meeting</p>";
                }
            }
        ?>    
    </body>
</html>
