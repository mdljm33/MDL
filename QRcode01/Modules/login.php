<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include '../Modules/bd.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Vérifier les informations de connexion
    $sql = "SELECT id, password, nom FROM user WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            $_SESSION['nom_utilisateur'] = $user['nom'];  // Nom de l'utilisateur connecté

        


            header('Location:/MDL/QRcode01/index.php');
            exit;
        }
    }
    $error = "Identifiants incorrects.";
}
?>

