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
                    <img src="images/Logo_Ufr.png" alt="logo ufr" heigth="90" width="90">
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
       <form action="registre.php" method="post" id="stmt">
            <h3 class="ins">Fiche d'inscription</h3>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Noms</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prénoms</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Date de naisance</label>
            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Genre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Date d'admission</label>
            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">I.C</label>
            <input type="number" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-danger">Envoyer</button>
        </form>
            </div>
    </section>
    <section class="foter">
        <footer>
            <h6>copyrigthc2019 STMT_DEV.....@ </h6>
        </footer>
        </section>
    </body>
    </html>
