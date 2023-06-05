<?php
include('connexion.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

try {
    // Récupérer les informations de l'étudiant à modifier
    $query = "SELECT * FROM etudiant WHERE id = :id";
    $result = $conn->prepare($query);
    $result->bindParam(':id', $id);
    $result->execute();

    if ($result->rowCount() > 0) {
        // Supprimez cette ligne car vous avez déjà utilisé fetch() dans le if condition
        // $row = $result->fetch(PDO::FETCH_ASSOC);

        // Afficher les détails de l'étudiant spécifié
        echo "<h1>Détails de l'étudiant</h1>";
        echo "<table>";
        echo "<tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Genre</th>
        <th>Date de naissance</th>
        <th>Date d'admission</th>
        <th>Contact</th>
        </tr>";
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";



            echo "<td>" . $row['nom'] . "</td>";
            echo "<td>" . $row['prenom'] . "</td>";
            echo "<td>" . $row['genre'] . "</td>";
            echo "<td>" . $row['date_naissance'] . "</td>";
            echo "<td>" . $row['admission'] . "</td>";
            echo "<td>" . $row['contact'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Aucun étudiant trouvé avec cet ID.";
    }

    $conn = null;
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>
