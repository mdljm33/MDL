<?php
include 'db.php'; // Connexion à la base de données

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hachage du mot de passe
        $role = $_POST['role']; // Récupération du rôle

 // Insertion des données dans la base de données
 $sql = "INSERT INTO users (username, email, password, role) VALUES 
('$username', '$email', '$password', '$role')";
 
        if ($conn->query($sql) === TRUE) {
            echo "Inscription réussie. Vous pouvez vous connecter !";
        } else {
            echo "Erreur : " . $conn->error;
         }
}
$conn->close();
?>