<?php

    require 'config.php';

    if(isset($_GET['Del'])){

        $id_machine=$_GET['Del'];
        $query = "DELETE  FROM machine WHERE id_machine IN (SELECT MAX(id_machine)FROM machine)ORDER BY id_machine ASC";  /*$query = "DELETE FROM machine WHERE id_machine = '".$id_machine."'";*/
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