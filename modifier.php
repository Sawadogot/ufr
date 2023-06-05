<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/styl.css">
    <title>modification</title>
    <style>

    </style>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <a href="action.php"> <img src="images/Logo_Ufr.png" alt="logo ufr" heigth="90" width="90"></a>
                </div>
                <div class="col-md-3 text-center">
                    <h2 class="uni">Université Joseph KI ZERBO</h2>
                </div>
                <div class="col-md-5 text-right" id="de">
                    <h4 class="text-right">BURKINA FASO</h4>
                    <P class="text-right">Unité Progrès Justice</P>
                </div>
            </div>
        </div>
        <div class="biens">
            <h1 class="bien"> MODIFICATION </h1>
        </div>
    </header>
    </body> 
</html>
<?php
$host = 'localhost'; // Adresse du serveur de base de données
$dbname = 'mabase'; // Nom de la base de données
$user = 'root'; // Nom d'utilisateur pour la base de données
$password = ''; // Mot de passe pour la base de données
try {
    // Création de l'objet PDO pour établir la connexion
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    
    // Configuration des attributs PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



    // Vérifier si l'ID de l'étudiant est passé en tant que paramètre
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Récupérer les informations de l'étudiant à modifier
        $query = "SELECT * FROM etudiant WHERE id = :id";
        $result = $conn->prepare($query);
        $result->bindParam(':id', $id);
        $result->execute();

        if ($result->rowCount() > 0) {
            $row = $result->fetch(PDO::FETCH_ASSOC);

            // Afficher le formulaire de modification avec les valeurs pré-remplies
            echo "<form action='modifier.php' method='POST'>";
            echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
            echo "Nom: <input type='text' name='nom' value='" . $row['nom'] . "'><br>";
            echo "prenom: <input type='text' name='prenom' value='" . $row['prenom'] . "'><br>";
            echo "genre: <input type='text' name='genre' value='" . $row['genre'] . "'><br>";
            echo "date_naissance: <input type='date' name='date_naissance' value='" . $row['date_naissance'] . "'><br>";
            echo "admission: <input type='date' name='admission' value='" . $row['admission'] . "'><br>";
            echo "contact: <input type='text' name='contact' value='" . $row['contact'] . "'><br>";
            // Ajoutez ici les autres champs que vous souhaitez modifier
            echo "<input type='submit' value='Enregistrer'>";
            echo "</form>";
        }
    }  
    // Vérifier si le formulaire est soumis
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupérer les données du formulaire
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $genre = $_POST['genre'];
        $date_naissance = $_POST['date_naissance'];
        $admission = $_POST['admission'];
        $contact = $_POST['contact'];

        // Préparer la requête SQL pour mettre à jour les informations de l'étudiant
        $query = "UPDATE etudiant SET nom = :nom, prenom = :prenom, genre = :genre, date_naissance = :date_naissance, admission = :admission, contact = :contact WHERE id = :id";
        $result = $conn->prepare($query);
        $result->bindParam(':nom', $nom);
        $result->bindParam(':prenom', $prenom);
        $result->bindParam(':genre', $genre);
        $result->bindParam(':date_naissance', $date_naissance);
        $result->bindParam(':admission', $admission);
        $result->bindParam(':contact', $contact);
        $result->bindParam(':id', $id);

        // Exécuter la requête SQL
        $result->execute();

        // Rediriger vers la page principale après la mise à jour
        header("Location: liste.php");
        exit();
    }

    $conn = null;
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>