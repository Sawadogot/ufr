<?php
include('connexion.php');
if(isset($_POST['registre'])){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $date_naissance=$_POST['date_naissance'];
    $genre=$_POST['genre'];
    $admission=$_POST['admission'];
    $contact=$_POST['contact'];
    $sql="INSERT INTO etudiant( nom, prenom, date_naissance, genre,admission,contact)
     VALUES (:nom,:prenom,:date_naissance,:genre,:admission,:contact)"; 
    $requete=$conn->prepare($sql);
    $requete->bindParam(':nom',$nom);
    $requete->bindParam(':prenom',$prenom);
    $requete->bindParam(':date_naissance',$date_naissance);
    $requete->bindParam(':genre',$genre);
    $requete->bindParam(':admission',$admission);
    $requete->bindParam(':contact',$contact);
    try{
        $requete->execute();
        echo" vos données ont éte bien enregistrées";
        include('index2.php');
    } catch(PDOException $e){
        echo"erreur d'enregistrement".$e->getMessage(); 
    }  
}
?>