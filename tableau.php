<?php
    require 'config.php';

    if(isset($_POST["submit"])){

        $date = $_POST["date"];
        $constructeur = $_POST["constructeur"];
        $type = $_POST["type"];
        $identifiant = $_POST["identifiant"];
        $nandb = $_POST["n&b"];
        $nandb_GF = $_POST["n&b_GF"];
        $couleur = $_POST["couleur"];
        $couleur_GF = $_POST["couleur_GF"];

    /*  $nref = $_POST["nref"];
        $rem =$_POST["rem"];          */

        $query = "INSERT INTO machine VALUES('','$date','$constructeur','$type ',' $identifiant','$nandb','$nandb_GF',' $couleur',' $couleur_GF')";
        mysqli_query($conn,$query);
        echo
            "<script>alert('Création d'un nouveau relever réussi.');</script>";
        header("Location: nouveau_tableau.php");
        }
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8"><link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style/tableau.css">
        <title>Nouveau relever compteur</title>
    </head>
    <body>

    <nav class="header">
            <div class="inner_header">
                <div class="logo_container">
                    <h1 href="app.php" >Tableau de relever compteur</h1>
                </div>

                <ul class="navigation">
                    <a href="aide.php"><li>Aide</li></a>
                    <a href="app.php"><li>Menu</li></a>
                    <a href="select_tab.php"><li>Les Taux-taux</li></a>
                    <a href="logout.php"><li>Déconnexion</li></a>
                </ul>
            </div>
        </nav><br><br>

        <form class="" action="" method="POST" autocomplete="off">

        <div class="container">
            <form action="/action_page.php">

                <div class="row">
                    <div class="col-25">
                        <label for="date">Date d'enregistrement: </label>
                    </div>
                    <div class="col-75">
                        <input type="month" name="date" id="date" require value="" >
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-25">
                        <label for="country">Marque :</label>
                    </div>
                    <div class="col-75">
                    <select id="constructeur" name="constructeur">
                        <option value="Canon">Canon</option>
                        <option value="Konica Minolta">Konica Minolta</option>
                        <option value="Xerox">Xerox</option>
                        <option value="Ricoh">Ricoh</option>
                        <option value="Sharp">Sharp</option>
                    </select>
                    </div>
                </div>
                

                <div class="row">
                    <div class="col-25">
                        <label class="color">Type :</label>
                    </div>
                    <div class="col-75">
                        <select id="type" name="type">
                            <option value="n&b">n&b</option>
                            <option value="couleur">couleur</option>
                        </select><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="identifiant">Identifiant :</label>
                    </div>
                    <div class="col-75">
                    <select id="identifiant" name="identifiant">
                        <option value="3776711208">3776711208</option>
                        <option value="377671132">377671132</option>
                        <option value="3146364992">3146364992</option>
                    </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="nref">Nouvelle référence :</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="nref" id="nref" require value="" placeholder="Nouvelle Référence">
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="relever_compteur">N&b:</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name="n&b" id="n&b" require value="" placeholder="Nombre de copie">
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="relever_compteur">N&b GF:</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name="n&b_GF" id="n&b_GF" require value="" placeholder="Nombre de copie grand format">
                    </div>
                </div>

                
                <div class="row">
                    <div class="col-25">
                        <label class="couleur">Couleur : </label>
                    </div>
                    <div class="col-75">
                        <input type="number" name="couleur" id="couleur" require value="" placeholder="Nombre de copie">
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label class="color_GF">Couleur GF: </label>
                    </div>
                    <div class="col-75">
                        <input type="number" name="couleur_GF" id="couleur_GF" require value="" placeholder="Nombre de copie grand format">
                    </div>
                </div>
                <br>
                <div class="row">
                    <a href="nouveau_tableau.php">
                        <button type="submit" name="submit">Valider</button>
                    </a>
                </div>
            </form>
        </form>
        </div><br>
    </body>
</html>