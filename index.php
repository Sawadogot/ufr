 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/bootstrap-5.2.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style/main.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"> </script>
  <script src="script.js" defer></script>
  <title>Mon site - Connexion</title>
</head>

<body>
  <div class="container">
    <div class="logo">
      <i class="fas fa-user"></i>
    </div>

    <div class="tab-body" data-id="connexion">
      <form>
        <div class="row">
          <i class="far fa-user"></i>
          <input type="email" class="input" placeholder="Adresse Mail">
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input placeholder="Mot de Passe" type="password" class="input">
        </div>
        <a href="#" class="link">Mot de passe oublié ?</a>
        <a href="seconnerter.php"><button class="btn" type="button">Connexion</button></a>
      </form>
    </div>

    <div class="tab-body" data-id="inscription">
      <form>
        <div class="row">
          <i class="far fa-user"></i>
          <input type="email" class="input" placeholder="Adresse Mail">
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input type="password" class="input" placeholder="Mot de Passe">
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input type="password" class="input" placeholder="Confirmer Mot de Passe">
        </div>
        <button class="btn" type="button">Inscription</button>
      </form>
    </div>

    <div class="tab-footer">
      <a class="tab-link active" data-ref="connexion" href="javascript:void(0)">Connexion</a>
      <a class="tab-link" data-ref="inscription" href="javascript:void(0)">Inscription</a>
    </div>
  </div>
  <script src="style/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
  <script src="style/thera.js"></script>
</body>

</html>