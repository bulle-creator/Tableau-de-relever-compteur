<?php
require 'config.php';

if(isset($_POST['update'])){
    
    $id_machine=$_GET['ID'];
    $date=$_POST['date'];
    $constructeur=$_POST['constructeur'];
    $type=$_POST['type'];
    $identifiant=$_POST['identifiant'];
    $nandb=$_POST['nandb'];
    $nandb_GF=$_POST['nandb_GF'];
    $couleur=$_POST['couleur'];
    $couleur_GF=$_POST['couleur_GF'];

    $query = "UPDATE machine SET date = '".$date."', constructeur = '".$constructeur."', type = '".$type."', identifiant = '".$identifiant."', nandb = '".$nandb."', nandb_GF = '".$nandb_GF."', couleur = '".$couleur."', couleur_GF = '".$couleur_GF."' WHERE id_machine = '".$id_machine."' ";
    $result = mysqli_query($conn ,$query);

    if($result)
    {
        header("location: nouveau_tableau.php");
    }
    else{
        echo 'Veuillez vérifier votre requête';
    }
}
else
{
    header("location: nouveau_tableau.php");
}



?>