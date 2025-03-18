


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/styles.css">
    <title>Inscription</title>
</head>



<body>

    <?php include '../Modules/header.php'; ?>

<div class="client-area">
    <div class="container">
      <form method="post" action="/MDL/Qrcode01/Modules/register_user.php" class="register-form">
          <h2>Inscription</h2>

          <div class="form-group">
              <label for="nom">Nom :</label>
              <input type="text" id="nom" name="nom" required>
          </div>

          <div class="form-group">
              <label for="prenom">Prenom :</label>
              <input type="text" id="prenom" name="prenom" required>
          </div>
          
          <div class="form-group">
              <label for="classe">Classe :</label>
              <select id="classe" name="classe" required>
                  <option value="classe1">2nd01</option>
                  <option value="classe2">2nd02</option>
                  <option value="classe3">2nd03</option>
                  <option value="classe4">2nd04</option>
                  <option value="classe2">22</option>
                  <option value="classe3">Classe 3</option>
                  <option value="classe4">Classe 4</option>
                  <option value="classe2">Classe 2</option>
                  <option value="classe3">Classe 3</option>
                  <option value="classe4">Classe 4</option>
                  <option value="classe2">Classe 2</option>
                  <option value="classe3">Classe 3</option>
                  <option value="classe4">Classe 4</option>
                  <option value="classe2">Classe 2</option>
                  <option value="classe3">Classe 3</option>
                  <option value="classe4">Classe 4</option>
                  <option value="classe2">Classe 2</option>
                  <option value="classe3">Classe 3</option>
                  <option value="classe4">Classe 4</option>
                  <option value="classe2">Classe 2</option>
                  <option value="classe3">Classe 3</option>
                  <option value="classe4">Classe 4</option>
                  <option value="classe2">Classe 2</option>
                  <option value="classe3">Classe 3</option>
                  <option value="classe4">Classe 4</option>
                  <option value="classe2">Classe 2</option>
                  <option value="classe3">Classe 3</option>
                  <option value="classe4">Classe 4</option>
                  <option value="classe2">Classe 2</option>
                  <option value="classe3">Classe 3</option>
                  <option value="classe4">Classe 4</option>
                  <option value="classe2">Classe 2</option>
                  <option value="classe3">Classe 3</option>
                  <option value="classe4">Classe 4</option>
                  <option value="classe2">Classe 2</option>
                  <option value="classe3">Classe 3</option>
                  <option value="classe4">Classe 4</option>
                  <option value="classe2">Classe 2</option>
                  <option value="classe3">Classe 3</option>
                  <option value="classe4">TSTI2D</option>
             </select>
          </div>

          <div class="form-group">
              <label for="email">E-mail :</label>
              <input type="email" id="email" name="email" required>
          </div>

          <div class="form-group">
              <label for="password">Mot de passe :</label>
              <input type="password" id="password" name="password" required>
          </div>

          <div class="button">
              <input type="submit" value="S'inscrire" class="button">
          </div>
      </form>
  </div>
</div>

    <?php include '../Modules/footer.php'; ?>

</body>
</html>
