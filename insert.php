<?php

    if(isset($_POST['submit'])){

        if(empty($_POST['date']) || empty($_POST['construction']) || empty($_POST['type']) || empty($_POST['identifiant']) || empty($_POST['nandb']) || empty($_POST['nandb_GF']) || empty($_POST['couleur']) || empty($_POST['couleur_GF'])){
            
            echo 'Veuillez remplir le champ vide';
        }
        else{
            $date =$_POST['date'];
            $constructeur =$_POST['constructeur'];
            $type =$_POST['type'];
            $identifiant =$_POST['identifiant'];
            $nandb =$_POST['nandb'];
            $nandb_GF =$_POST['nandb_GF'];
            $couleur =$_POST['couleur'];
            $couleur_GF =$_POST['couleur_GF'];

            $query = "INSERT INTO machine (date, constructeur, type, identifiant, nandb, nandb_GF, couleur, couleur_GF) values ('$date, $constructeur, $type, $identifiant, $nandb, $nandb_GF, $couleur, $couleur_GF ')";
            $result = mysqli_query($conn,$query);
        
        if($result)
        {
            header("location:nouveau_tableau.php");
        }

        else{
            echo 'Veuillez vérifier votre requête';
            }
        }
    }
        else{
            header("location:nouveau_tableau.php");
        }
?>