
<?php
// include('connexion.php')
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

        // Supprimer l'étudiant de la base de données
        $query = "DELETE FROM etudiant WHERE id = :id";
        $result = $conn->prepare($query);
        $result->bindParam(':id', $id);
        $result->execute();
        header("Location: liste.php");
        exit();
    } else {
        header("Location: liste.php");
        exit();
    }

    $conn = null;
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>