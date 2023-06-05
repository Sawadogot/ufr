<?php
include('connexion.php');


if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
    // Récupérer les informations de l'étudiant à modifier
    $query = "SELECT * FROM etudiant WHERE id = :id";
    $result = $conn->prepare($query);
    $result->bindParam(':id', $id);
    $result->execute();

    if ($result->rowCount() > 0) {
        $row = $result->fetch(PDO::FETCH_ASSOC);
    }
    // Afficher les détails de la liste des étudiants
    echo "<h1>Liste des étudiants</h1>";
    echo "<table>";
    echo "<tr><th>ID</th><th>Nom</th><th>Prénom</th><th>Genre</th><th>Date de naissance</th><th>Date d'admission</th><th>Contact</th><th>Actions</th></tr>";
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nom'] . "</td>";
        echo "<td>" . $row['prenom'] . "</td>";
        echo "<td>" . $row['genre'] . "</td>";
        echo "<td>" . $row['date_naissance'] . "</td>";
        echo "<td>" . $row['admission'] . "</td>";
        echo "<td>" . $row['contact'] . "</td>";
        echo "<td><a href='modifier.php?id=" . $row['id'] . "'>Modifier</a></td>"; // Lien vers la page de modification avec l'ID de l'étudiant
        echo "</tr>";
    }
    echo "</table>";

    $conn = null;
 catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>
