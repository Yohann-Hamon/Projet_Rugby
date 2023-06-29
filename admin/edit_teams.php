<?php
            session_start();

            if(!isset($_SESSION['admin'])){
                header('HTTP/1.0 404 Not Found');
                header('Location: ../error404.php');
                exit;
            }

            require '../bdd/Teams.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modification équipes</title>
    </head>
    <body>

        <?php
            
            $id = $_POST['teams'];       

            if(isset($_POST['choose']))
            {   

                $team = new Teams();
                $teams = $team->findAll();

                $erreurs = false;

                if(isset($_POST['teams']) && !empty($_POST['teams']))
                {
                    foreach($teams as $a_team)
                    {
                        if($a_team['id'] == $id)
                        {
                            ?>  
                                <form action="team_processing.php" method="POST">
                                    <label for="id">ID : </label>
                                    <select name="id" id="id">
                                    <?php
                                        echo '<option value="'.$a_team['id'].'" hidden>'.$a_team['id'].'</option>';
                                    ?>
                                    <br>
                                    <label for="country">Pays : </label>
                                    <input type="text" name="country" id="country">
                                    <br>
                                    <br>
                                    <label for="world_rank">Classement mondial : </label>
                                    <input type="number" name="world_rank" id="world_rank">
                                    <br>
                                    <br>
                                    <label for="pool">Poule : </label>
                                    <input type="text" name="pool" id="pool">
                                    <br>
                                    <br>
                                    <label for="emblem">Emblem : </label>
                                    <input type="text" name="emblem" id="emblem">
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
                    echo "<p>Veuillez sélectionnez l'équipe !'</p>";
                }
            }
        ?>    
    </body>
</html>
