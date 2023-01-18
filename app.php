
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style/index.css">
        <title>Relever de compte</title>
    </head>
    <body>

    <nav class="header">
            <div class="inner_header">
                <div class="logo_container">
                    <h1>Tableau de relever compteur</h1>
                </div>

                <ul class="navigation">
                    <a href="app.php"><li>Menu</li></a>
                    <a href="select_tab.php"><li>Les Taux-taux</li></a>
                    <a href="aide.php"><li>Aide</li></a>
                    <a href="logout.php"><li>Déconnexion</li></a>
                    <i class="fi fi-br-sign-out-alt"></i>
                </ul>
            </div>
    </nav><br>

    <div style="text-align: left;"> 
    </div> <br>

    <section class="section">
        <div class="container">
            <div class="column">
                
                <table>
                    <tr>
                        <th>Date</th>
                        <th>Constructeur</th>
                        <th>Type</th>
                        <th>Identifiant</th>
                        <th>N&B</th>
                        <th>N&b GF</th>
                        <th >Couleur</th>
                        <th>Couleur GF</th>
                    </tr>

                    <?php
                    require 'config.php';

                    if($conn-> connect_error) {
                        die("Connection raté :". $conn-> connect_error);
                    }
                    $sql = "SELECT  date, constructeur, type, identifiant, nandb, nandb_GF, couleur, couleur_GF FROM machine";
                    $result = $conn-> query($sql);

                    if ($result -> num_rows > 0) {
                        while ($row = $result -> fetch_assoc()) {
                            echo "<tr>
                                    <td>" .$row ["date"] ."</td>
                                    <td>" .$row ["constructeur"] ."</td>
                                    <td>" .$row ["type"] ."</td>
                                    <td>" .$row ["identifiant"] ."</td>
                                    <td>" .$row ["nandb"] ."</td>
                                    <td>" .$row ["nandb_GF"] ."</td>
                                    <td>" .$row ["couleur"] ."</td>
                                    <td>" .$row ["couleur_GF"]."</td>
                                </tr> \n"; 
                        }
                        echo "</table>";
                        } 
                    else {
                        echo "Il n'y a rien dans le tableau ";
                    }

                    $conn->close();
                    ?>
                    <?php

                    ?>
                    </table><br><br>
                </form>  
            </div>
        </div>
        
        <a href="tableau.php">
            <div style="text-align: right;">
                <button type="submit" class="btn-space" name="submit">Crée un nouveau relever</button>
            </div> 
        </a>

        <a href="export.php">
            <div style="text-align: right;">
                <button type="submit" class="btn-space" name="submit">Telecharger</button>
            </div>
        </a>

        <?php
      /*
        require 'config.php';

            $role = $_GET["role"];

            $admin = mysqli_query($conn, "SELECT role FROM utilisateur WHERE role ='Administrateur' ");
            if($admin) {
                echo
                "<script> alert ('Vous n êtes pas administrateur vous ne pouvez pas avoir accés.'); </script>";
            }
            else{} */ 
        ?>
        <a href="edit.php">
            <div style="text-align: right;">
                <button type="submit" class="btn-space" name="submit">Modifier</button>
            </div>
        </a>

    </section> 

    
    <br><br>  
</body>
</html>