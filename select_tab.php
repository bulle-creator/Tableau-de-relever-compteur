
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
                    <h1><span>Tableau de relever compteur</span></h1>
                </div>

                <ul class="navigation">
                <a href="app.php"><li>Menu</li></a>
                    <a href="select_tab.php"><li>Les Taux-taux</li></a>
                    <a href="aide.php"><li>Aide</li></a>
                    <a href="logout.php"><li>Déconnexion</li></a
                </ul>
            </div>
    </nav><br>   

    <div style="text-align: right;">
        <form action="" method="POST">
            <label for="month">Date : 
            <input type="month" name="date"/>
            <label for="ident">Identifiant : 
            <input type="texts" name="identifiant"/> 
            <input type="submit" name="datetime" value="Selectionner"></label>
        </form>
    </div>   
    <br> 

    <center><h3>Relever Compteur d'un mois</h3></center>
                    <br>

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

                        if(isset($_POST["datetime"])){

                            $date = $_POST["date"];

                            $query = "SELECT * FROM `machine` WHERE date = '$date' ";
                            $query_run = mysqli_query($conn,$query);

                            while($row = mysqli_fetch_array($query_run)){
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
                        $conn->close();
                    ?>

                    </table><br>
                    <hr><br>
                    <center><h3>Relever Compteur Total d'un mois</h3></center>
                    <br>

                    <table>
                    <tr>
                        <th>Date</th>
                        <th>Identifiant</th>
                        <th>N&B total</th>
                        <th>N&b GF total</th>
                        <th >Couleur total</th>
                        <th>Couleur GF total</th>
                    </tr>
                    <?php 
                    
                        $conn = mysqli_connect("localhost","root","","upec-reference");

                        if($conn-> connect_error) {
                            die("Connection raté :". $conn-> connect_error);
                        }

                        if(isset($_POST["datetime"])){

                            $date = $_POST["date"];
                            $identifiant = $_POST["identifiant"];

                            $query = "SELECT date, identifiant, nandb, nandb_GF, couleur, couleur_GF,
                            SUM(nandb) AS nandb_total ,
                            SUM(nandb_GF) AS nandb_GF_total,
                            SUM(couleur) AS couleur_total,
                            SUM(couleur_GF) AS couleur_GF_total
                            FROM machine
                            WHERE identifiant = $identifiant AND date='$date'";
                            
                            $query_run = mysqli_query($conn,$query);
                            while($row = mysqli_fetch_array($query_run)){
                                echo "<tr>
                                        <td>" .$row ["date"] ."</td>
                                        <td>" .$row ["identifiant"] ."</td>
                                        <td>" .$row ["nandb_total"] ."</td>
                                        <td>" .$row ["nandb_GF_total"] ."</td>
                                        <td>" .$row ["couleur_total"] ."</td>
                                        <td>" .$row ["couleur_GF_total"]."</td>
                                    </tr> \n";
                                }  
                                echo "</table>";
                            } 
                        $conn->close();
                    ?>

                    </table><br><br>
                    </form>    
                </div>
            </div>
            <a href="tableau.php">
                <div style="text-align: right;">
                    <button type="submit" name="submit">Crée un nouveau relever</button>
                </div> <br><br>
            </a> 
    </body>
    <br><br>
</html>