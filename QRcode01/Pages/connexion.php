<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include '../Modules/bd.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Vérifier les informations de connexion
    $sql = "SELECT id, password, role FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
        
            exit;
        }
    }
    $error = "Identifiants incorrects.";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../QRcode01/style/styles.css">
    <title>Connexion</title>
</head>


  <body>
    <?php echo "<script>console.log('{$data}' );</script>";?>
  <header>
    <?php include '../QRcode01/Modules/header.php'; ?>
</header>
<div class="client-area">
    <div class="container">
      <form method="post" action="/QRcode01/index.php" class="register-form">
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
    <?php include '../QRcode01/Modules/footer.php'; ?>
</body>
</html>
