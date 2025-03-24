<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/styles.css">
    <title>Connexion</title>
</head>



<body>
<?php if (!empty($error)) : ?>
    <p style="color: red; text-align: center;"><?php echo $error; ?></p>
<?php endif; ?>


    <?php include '../Modules/header.php'; ?>

<div class="client-area">
    <div class="container">
      <form method="post" action="/MDL/QRcode01/Modules/login.php" class="register-form">
          <h2>Connexion</h2>

          <div class="form-group">
              <label for="email">E-mail :</label>
              <input type="email" id="email" name="email" required>
          </div>

          <div class="form-group">
              <label for="password">Mot de passe :</label>
              <input type="password" id="password" name="password" required>
          </div>

          <div class="button">
              <input type="submit" value="Connexion" class="button">
          </div>
      </form>
  </div>
</div>
    <?php include '../Modules/footer.php'; ?>
</body>
</html>
