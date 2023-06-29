<?php
    session_start();

    require_once '../bdd/Users.php';


    $con = mysqli_connect("localhost","root","","rugby_world_cup_2023");

    if(!$con){
        die('Connection Failed'. mysqli_connect_error());
    }



    if(isset($_POST['registration'])){

        $erreurs = false;

        if(isset($_POST['mail']) && !empty($_POST['mail'])){
            // email valide
        } else {
            $erreurs = true;
        }

        if(isset($_POST['pseudo']) && !empty($_POST['pseudo']))
        {
            // pseudo valide
        } 
        else {
            $erreurs = true;
        }

        if(isset($_POST['password']) && !empty($_POST['password']))
        {
            // password valide
        } 
        else {
            $erreurs = true;
        }

        if($erreurs == false)
        {
        $mail = mysqli_real_escape_string($con, $_POST['mail']);
        $pswd = mysqli_real_escape_string($con, $_POST['password']);
        $username = mysqli_real_escape_string($con, $_POST['pseudo']);

        $query = "INSERT INTO users (mail,pswd,username) VALUES ('$mail','$pswd','$username')";
            // Création d'une variable
            $_SESSION['admin'] = true;
            echo '<p>Vous avez été inscrit</p>';
            
            // Redirection 
            $query_run = mysqli_query($con, $query);
        }
        else{
            ?>
                <a href="registration.php">
                    Veuillez remplir tous les champs pour être inscrit(e).
                </a> 
            <?php
        }
    }


    if(isset($_POST['connection'])){

        function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }

        $mail = validate($_POST['mail']);
        $pass = validate($_POST['password']);
        $pseudo = validate($_POST['pseudo']);

            //  Vérification que l'mail et le mot de passe ont bien été saisis
        if (empty($mail)) {
            header("Location: login.php?error=mail is required");
            exit();
        }else if(empty($pass)){
            header("Location: login.php?error=Password is required");
            exit();
        }else{
            $sql = "SELECT * FROM users WHERE mail='$mail' AND pswd='$pass' AND username='$pseudo'";

            $query = mysqli_query($con, $sql);

            if (mysqli_num_rows($query) === 1) {
                $row = mysqli_fetch_assoc($query);
                if ($row['mail'] === $mail && $row['pswd'] === $pass && $row['username'] === $pseudo ) {
                    $_SESSION['Admin'] = true;
                    $_SESSION['mail'] = $row['mail'];
                    $_SESSION['pswd'] = $row['pswd'];
                    $_SESSION['username'] = $row['username'];
                    header("Location:  ./admin_index.php");
                    exit();
                }else{
                    header("Location: connection.php?error=Incorect mail,password or username");
                    exit();
                }
            }else{
                header("Location: connection.php?error=Incorect mail , password or username");
                exit();
            }
        }
        
    }else{
        header("Location: connection.php");
        exit();
    }
