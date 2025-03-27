<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include '../Modules/bd.php';

$error = ""; // Variable pour stocker les erreurs

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (!empty($email) && !empty($password)) {
        // Vérifie si la connexion à la BD fonctionne
        if (!$conn) {
            die("Erreur de connexion : " . mysqli_connect_error());
        }

        // Préparer la requête SQL pour éviter l'injection
        $stmt = $conn->prepare("SELECT id, password, nom FROM user WHERE email = ?");
        if (!$stmt) {
            die("Erreur SQL : " . $conn->error);
        }

        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            if (password_verify($password, $user['password'])) {
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email;
                $_SESSION['nom_utilisateur'] = $user['nom']; // Stocke le nom de l'utilisateur

                header('Location:/MDL/QRcode01/index.php');
                exit; // Assurez-vous que le script ne continue pas après la redirection
            } else {
                $error = "Identifiant ou mot de passe incorrect."; // Message générique
            }
        } else {
            $error = "Identifiant ou mot de passe incorrect."; // Message générique
        }
        $stmt->close();
    } else {
        $error = "Veuillez remplir tous les champs.";
        exit;
    }
}
?>

<!-- Affichage de l'erreur dans le formulaire -->
<?php if (!empty($error)) : ?>
    <p style="color: red; text-align: center;"><?php echo $error; ?></p>
<?php endif; ?>
