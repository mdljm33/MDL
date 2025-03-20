


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
      <form method="post" action="/Modules/register_user.php" class="register-form">
          <h2>Inscription</h2>

          <div class="form-group">
              <label for="nom">Nom :</label>
              <input type="text" id="nom" name="nom" required>
          </div>

          <div class="form-group">
              <label for="prenom">Prenom :</label>
              <input type="text" id="prenom" name="prenom" required>
          </div>
          
          <div class="menu-deroul">
              <label for="classe">Classe :</label>
              <select id="classe" name="classe" required>
            <option value="2nd01">2nd01</option>
            <option value="2nd02">2nd02</option>
            <option value="2nd03">2nd03</option>
            <option value="2nd04">2nd04</option>
            <option value="2nd05">2nd05</option>
            <option value="2nd06">2nd06</option>
            <option value="2nd07">2nd07</option>
            <option value="2nd08">2nd08</option>
            <option value="2nd09">2nd09</option>
            <option value="2nd10">2nd10</option>
            <option value="2nd11">2nd11</option>
            <option value="2nd12">2nd12</option>
            <option value="2nd13">2nd13</option>
            <option value="2nd14">2nd14</option>
            <option value="2nd15">2nd15</option>
            <option value="2nd16">2nd16</option>
            <option value="2nd17">2nd17</option>
            <option value="1ere01">1ere01</option>
            <option value="1ere02">1ere02</option>
            <option value="1ere03">1ere03</option>
            <option value="1ere04">1ere04</option>
            <option value="1ere05">1ere05</option>
            <option value="1ere06">1ere06</option>
            <option value="1ere07">1ere07</option>
            <option value="1ere08">1ere08</option>
            <option value="1ere09">1ere09</option>
            <option value="1ere10">1ere10</option>
            <option value="1ere11">1ere11</option>
            <option value="1STI2D">1STI2D</option>
            <option value="TG01">TG01</option>
            <option value="TG02">TG02</option>
            <option value="TG03">TG03</option>
            <option value="TG04">TG04</option>
            <option value="TG05">TG05</option>
            <option value="TG06">TG06</option>
            <option value="TG07">TG07</option>
            <option value="TG08">TG08</option>
            <option value="TG09">TG09</option>
            <option value="TG10">TG10</option>
            <option value="TSTI2D">TSTI2D</option>
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
