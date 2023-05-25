<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <thname="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style/styl.css">
    <title>Liste</title>
</head>
<body>
  <section>
    <img src="images/Logo_Ufr.png" alt="logo ufr" heigth="100" width="100">
        <h1 class="den">
            Liste des inscrits UFR/SDS
        </h1>
    </section>
    <table>
        <tr>
          <th><h2>Nom</h2></th>
          <th><h2> Prénoms</h2></th>
          <th><h2> Date de naissance</h2></th>
          <th><h2> Genre</h2></th>
          <th><h2>Date d'admission</h2></th>
          <th><h2>Personne à prevenir</h2></th>
        </tr>
       <?php
       include('connexion.php');
       $sql="SELECT nom,prenom,date_naissance,genre,admission,contact FROM etudiant";
       $result=$conn->query($sql);
       if($result->rowcount()>0){
        while($row=$result->fetch(PDO::FETCH_ASSOC)){
          echo" <tr>";
          echo" <td>".$row["nom"]." </td>";
          echo" <td>".$row["prenom"]." </td>";
          echo" <td>".$row["date_naissance"]." </td>";
          echo" <td>".$row["genre"]." </td>";
         echo" <td>".$row["admission"]." </td>"; 
         echo" <td>".$row["contact"]." </td>"; 
          echo" </tr>";

        }
       }
       ?>
      </table>

    
    <section class="foter mt-2 pt-2">
        <footer>
            <p>© Copyright 2023. Tous droits Réservés. Application d'inscription l'UFR/SDS. STMT_DEV.....@ </p>
        </footer>
    </section>
</body>
</html>