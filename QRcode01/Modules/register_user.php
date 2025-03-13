<?php
include 'bd.php'; // Connexion à la base de données

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $classe = $_POST['classe'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hachage du mot de passe

 // Insertion des données dans la base de données
 $sql = "INSERT INTO user (nom, prenom, classe, email, password) VALUES ('$nom','$prenom','$classe', '$email', '$password')";
 
        if ($conn->query($sql) === TRUE) {
            echo "Inscription réussie. Vous pouvez vous connecter !";
        } else {
            echo "Erreur : " . $conn->error;
         }
}
$conn->close();
?>