<?php
session_start(); // Démarrer la session

// Si la session existe, la détruire
if (isset($_SESSION['loggedin'])) {
    $_SESSION = array(); // Nettoyer la session
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    session_destroy(); // Détruire toutes les données de session
}

// Redirection vers la page d'accueil
header('Location: /MDL/QRcode01/index.php');
exit; // Terminer le script
?>
