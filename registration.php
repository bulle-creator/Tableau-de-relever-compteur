<?php
require 'config.php';

if(!empty($_SESSION["id_user"])){
    header("Location: login.php");
}
if(isset($_POST["submit"])){
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $login = $_POST["login"];
    $mot_de_passe = $_POST["mot_de_passe"];
    $confpass = $_POST["confpass"];
    $role = $_POST["role"];
    $code =$_POST["code"];
    $true_code = "uP3Cr3p4oGr4pH13";

    $duplicate = mysqli_query($conn, "SELECT * FROM utilisateur WHERE login ='$login'");
    if (mysqli_num_rows($duplicate) > 0){
        echo
            "<script>alert('Ce login est déjà pris');</script>";
        }

    else{
        if ($mot_de_passe != $confpass ){
            echo
                "<script>alert('Vos mot de pase ne sont pas identique ou vous n'est pas l'administrateur');</script>";
            }

        elseif($code != $true_code){
            echo
                "<script>alert('Vos mot de pase ne sont pas identique ou vous n'est pas l'administrateur');</script>";
            } 
            
        else{
            $query = "INSERT INTO utilisateur VALUES('','$nom','$prenom','$login','$mot_de_passe','$role')";
            mysqli_query($conn,$query);
            echo
                "<script>alert('Création d'un nouvelle utilisateur réussi');</script>";
            }
        }
    
}

?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style/registration.css">
        <title>Nouvel Utilisateur</title>
    </head>
    <body>

    <div class="header">
            <div class="inner_header">
                <div class="logo_container">
                    <h1><span>Tableau de relever compteur</span></h1>
                </div>

                <ul class="navigation">
                    <a href="logout.php"><li>Login</li></a>
                </ul>
            </div>
        </div><br><br>
    
        <form class="" action="" method="POST" autocomplete="off">
                <label form="nom">Nom : </label>
                <input type="text" name="nom" id="nom" require value=""><br>

                <label form="prenom">Prénom : </label>
                <input type="text" name="prenom" id="prenom" require value=""><br>

                <label form="login">Login : </label>
                <input type="text" name="login" id="login" require value=""><br>
                <label form="mot_de_passe">Mot de Passe : </label>

                <input type="password" name="mot_de_passe" id="mot_de_passe" require value=""><br>

                <label form="confpass">Confirmation du mot de passe : </label>
                <input type="password" name="confpass" id="confpass" require value=""><br>
                
                <label form="role">Role de l'utilisateur : </label>
                <select id="role" name="role">
                    <option value="Utilisateur">Utilisateur</option>
                    <option value="Administrateur">Administrateur</option>
                </select><br>
                
                <label form="code">Code de Validation : </label>
                <input type="password" name="code" id="code" require value=""><br>

                <a href="login.php">
                    <button type="submit" name="submit">Validation</button> 
                </a>
        </form>
        <br>
    </body>
</html>
