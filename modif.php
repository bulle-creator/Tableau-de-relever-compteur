<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style/modif.css">
        <title>Nouveau relever de compte</title>
    </head>

    <body>
        <nav class="header">
            <div class="inner_header">
                <div class="logo_container">
                    <h1><span>Tableau de relever compteur</span></h1>
                </div>

                <ul class="navigation">
                    <a href="aide.php"><li>Aide</li></a>
                    <a href="logout.php"><li>Logout</li></a>
                    <a href="app.php"><li>Menu</li></a>
                    <a href="select_tab.php"><li>Les Taux-taux</li></a>
                </ul>
            </div>
        </nav><br><br>

        <center>
            <?php
            require 'config.php';

            $id_machine = $_GET['GetId'];
            if($conn-> connect_error) {
                die("Connection raté :". $conn-> connect_error);
            }
            
            $sql = "SELECT * FROM machine WHERE id_machine IN (SELECT MAX(id_machine)FROM machine)ORDER BY id_machine ASC";
            /* $sql = "SELECT FROM machine WHERE id_machine = '".$id_machine."'"; */
            $result = $conn-> query($sql);

            if ($result -> num_rows > 0) {
                while ($row = $result -> fetch_assoc()) {
                    
                    $id_machine = $row['id_machine'];
                    $date = $row ["date"];
                    $constructeur = $row ["constructeur"] ;
                    $type = $row ["type"] ;
                    $identifiant = $row ["identifiant"] ;
                    $nandb = $row ["nandb"] ;
                    $nandb_GF= $row ["nandb_GF"];
                    $couleur = $row ["couleur"]; 
                    $couleur_GF = $row ["couleur_GF"];
            }} 
            else {
                echo "Il n'y a rien dans le tableau ";
            }
            $conn->close();
            ?>

        </center><br><br>
        <!--Modifier le formulaire de modification-->
        <form action="update.php?ID=<?php echo $id_machine ?>" method="POST">
            <label form="nom">Date : </label>
            <input type="text" class="from-control mb-2" placeholder="date" name="date" value="<?php echo $date ?>"/>
            
            <label form="nom">Constructeur : </label>
            <input type="text" class="from-control mb-2" placeholder="constructeur" name="constructeur" value="<?php echo $constructeur ?>"/>
            
            <label form="nom">Type : </label>
            <input type="text" class="from-control mb-2" placeholder="type" name="type" value="<?php echo $type ?>"/>
            
            <label form="nom">Identifiant : </label>
            <input type="text" class="from-control mb-2" placeholder="identifiant" name="identifiant" value="<?php echo $identifiant ?>"/>
            
            <label form="nom">Noir et Blanc : </label>
            <input type="text" class="from-control mb-2" placeholder="n&b" name="nandb" value="<?php echo $nandb ?>"/>
            
            <label form="nom">Noir et Blanc GF : </label>
            <input type="text" class="from-control mb-2" placeholder="n&b_GF" name="nandb_GF" value="<?php echo $nandb_GF ?>"/>
            
            <label form="nom">Couleur : </label>
            <input type="text" class="from-control mb-2" placeholder="couleur" name="couleur" value="<?php echo $couleur ?>"/>
            
            <label form="nom">Couleur GF : </label>
            <input type="text" class="from-control mb-2" placeholder="couleur_GF" name="couleur_GF" value="<?php echo $couleur_GF ?>"/>
            
            <button class="btn btn-primary" name="update">Mise à jour</button>

            <!--Ne modifie que la derniere enregistre-->
        </form>
        </table>
    </body>
</html>