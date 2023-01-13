<?php  
require 'config.php';

if(!empty($_SESSION["id_user"])){
    header("Location: index.php");
}
if(isset($_POST["submit"])){
    $login = $_POST["login"];
    $mot_de_passe = $_POST["mot_de_passe"];
    $result = mysqli_query($conn, "SELECT * FROM utilisateur WHERE login ='$login'");
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0){
        if($mot_de_passe == $row ["mot_de_passe"]){
            $_SESSION["login"] = true;
            $_SESSION["id_user"] = $row ["id_user"];
            header("Location: app.php");
        }
        else{
            echo
                "<script>alert('Mauvais Mot de Passe');</script>";
                exit;
            }
        }
    else{
        echo
            "<script>alert('Utilisateur inconnu');</script>";
        exit;
        }
}
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style/login.css">
        <title>Login</title>
    </head>
    <body>
    <nav class="header">
            <div class="inner_header">
                <div class="logo_container">
                    <h1><span>Tableau de relever compteur</span></h1>
                </div>
            </div>
        </nav> <br><br><br><br>
        
        <form class="" action="" method="POST" autocomplete="off">
            <div>
                <label form="login">Login : </label>
                <input type="text" name="login" id="login" require value=""><br>
                <label form="mot_de_passe">Mot de Passe : </label>
                <input type="password" name="mot_de_passe" id="mot_de_passe" require value=""><br>

                <a href="app.php">
                    <button type="submit" name="submit">Valider</button>
                </a>
                <div style="text-align: right;">
                    <a href="registration.php">Nouvelle utilisateur</a>
                </div>

            </div>
        </form>
    </body>
</html>
