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
        


            header('Location: /Serre Connecte/pages/client_area.php');
            exit;
        }
    }
    $error = "Identifiants incorrects.";
}
?>

