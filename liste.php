<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/styl.css">
    <title>Liste</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                   <a href="index.php"> <img src="images/Logo_Ufr.png" alt="logo ufr" height="90" width="90"></a>
                </div>
                <div class="col-md-3 text-center">
                    <h2 class="uni">Université Joseph KI ZERBO</h2>
                </div>
                <div class="col-md-5 text-right" id="de">
                    <h4 class="text-right">BURKINA FASO</h4>
                    <p class="text-right">Unité Progrès Justice</p>
                </div>
            </div>
        </div>
        <div class="biens"><h1 class="bien"> Liste des étudiants UFR/SDS </h1></div>
    </header>
    <div class="container">
        <table class="table table-striped text-center">
            <thead>
                <tr class="text-success">
                    <th scope="col"><h6>N°</h6></th> 
                    <th scope="col"><h6>Nom</h6></th>
                    <th scope="col"><h6>Prénoms</h6></th>
                    <th scope="col"><h6>Date de naissance</h6></th>
                    <th scope="col"><h6>Genre</h6></th>
                    <th scope="col"><h6>Date d'admission</h6></th>
                    <th scope="col"><h6>Personne à prévenir</h6></th>
                    <th scope="col" colspan ="3"><h6>Actions</h6></th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('connexion.php');
                $sql = "SELECT id, nom, prenom, date_naissance, genre, admission, contact FROM etudiant";
                $result = $conn->query($sql);
                if ($result->rowCount() > 0) {
                    $num=1;
                    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>";
                        echo "<td>" . $num . "</td>";
                        echo "<td>" . $row["nom"] . "</td>";
                        echo "<td>" . $row["prenom"] . "</td>";
                        echo "<td>" . $row["date_naissance"] . "</td>";
                        echo "<td>" . $row["genre"] . "</td>";
                        echo "<td>" . $row["admission"] . "</td>"; 
                        echo "<td>" . $row["contact"] . "</td>";
                        echo "<td><a href='detaille.php?id=" . $row['id'] . "'><button>Détail</button></a></td>"; 
                        echo "<td><a href='modifier.php?id=" . $row['id'] . "'><button>Modifier</button></a></td>";
                        echo "<td><a href='supprimer.php?id=" . $row['id'] . "'onclick='return confirm(\"Voulez-vous vraiment supprimer cet apprenant?\")'><button>Supprimer</button></a></td>";
                        $num++;
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <a href="seconnecter.php"><button class="petit"> se connerter</button></a>
    <section class="foter mt-2 pt-2">
        <footer>
            <p>© 2023. Tous droits réservés. Application d'inscription UFR/SDS. STMT_DEV.....@ </p>
            <a href="index.php"><button class="petit"> RETOUR</button></a>
        </footer>
    </section>
</body>
</html>