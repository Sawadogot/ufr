
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap-5.2.3-dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="style/styl.css">
    <title>Inscription ufr</title>
    <style>
    
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                   <a href="liste.php"> <img src="images/Logo_Ufr.png" alt="logo ufr" heigth="165" width="165"></a>
                </div>
                <div class="col-md-8 text-right" id="de">
                    <h4 class="text-right">BURKINA FASO</h4>
                    <P class="text-right">Unité Progrès Justice</P>
                </div>
            </div>
        </div>
    </header>
    <section class="section">
     <div class="container">
       <form action="registre.php" method="POST" id="stmt">
            <h3 class="ins">Fiche d'inscription</h3>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Noms</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nom" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prénoms</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="prenom" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Date de naisance</label>
            <input type="date" class="form-control" id="exampleInputEmail1" name="date_naissance" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Genre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="genre" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Date d'admission</label>
            <input type="date" class="form-control" id="exampleInputEmail1" name="admission" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Personne à prévenir</label>
            <input type="number" class="form-control" name="contact" id="exampleInputPassword1" required>
        </div>
        <button type="submit" id="btnt"name="registre" class="btn btn-danger">Envoyer</button>
        </form>
            </div>
    </section>
    <section class="foter">
        <footer>
            <p>© Copyright 2023. Tous droits Réservés. Application d'inscription l'UFR/SDS. STMT_DEV.....@ </p>
            <a href="liste.php"><button class="petit">LISTES</button></a>
        </footer>
        </section>
    </body>
    </html>
