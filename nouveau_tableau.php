
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style/nouveau_tableau.css">
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
                    <a href="app.php"><li>Menu</li></a>
                    <a href="select_tab.php"><li>Les Taux-taux</li></a>
                    <a href="logout.php"><li>Déconnexion</li></a>
                </ul>
            </div>
        </nav><br><br>

        <center><table>
            <tr>
                <th>Date</th>
                <th>Constructeur</th>
                <th>Type</th>
                <th>Identifiant</th>
                <th>N&B</th>
                <th>N&b GF</th>
                <th >Couleur</th>
                <th>Couleur GF</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        
<?php
    require 'config.php';
    
    if($conn-> connect_error) {
        die("Connection raté :". $conn-> connect_error);
    }

    $sql = "SELECT * FROM machine WHERE id_machine IN (SELECT MAX(id_machine)FROM machine)ORDER BY id_machine ASC";
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
                    <td>" .$row ["couleur_GF"]."</td>";

                    ?>
                    <td><a href="modif.php?GetId=<?php echo $row['id_machine'] ?>">Modifier</a></td>
                    <td><a href="supprimer.php?Del=<?php echo $row['id_machine'] ?>">Supprimer</a></td>

                <?php
                "</tr> \n";  
        }
        echo "</table>";
        } 
    else {
        echo "Il n'y a rien dans le tableau ";
    }

    $conn->close();
?>
            
        </table></center><br><br>

        <a href="tableau.php">
                <div style="text-align: right;">
                    <button type="submit" name="submit">Retour</button>
                </div> <br><br>
            </a> 
    </body>
</html>