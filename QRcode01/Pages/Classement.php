<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style/styles.css">
  <title>Chasse aux QR Codes</title>
</head>

<header>
  <?php include '../Modules/header.php'; ?>
</header>


<body>

<div class="client-area">
    <div class="container">
    <?php
// Inclure le fichier de connexion à la base de données
include '../Modules/bd.php';

// Requête SQL pour récupérer les informations triées par score (du plus petit au plus grand)
$sql = "SELECT nom, prenom, classe, score FROM user ORDER BY score ASC"; // ASC pour tri croissant
$score = $conn->query($sql);

// Vérifie s'il y a des résultats
if ($score->num_rows > 0) {
    // Si des résultats sont trouvés, affiche les données dans un tableau
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Classe</th>
                <th>Score</th>
            </tr>";

    // Affiche chaque ligne de résultat
    while($row = $score->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["nom"] . "</td>
                <td>" . $row["prenom"] . "</td>
                <td>" . $row["classe"] . "</td>
                <td>" . $row["score"] . "</td>
              </tr>";
    }

    echo "</table>";  // Fermer la table HTML
} else {
    echo "Aucun résultat trouvé.";  // Message si aucun enregistrement
}

// Ferme la connexion à la base de données
$conn->close();
?>
    </div>
  </div>
</body>

<footer>
    <?php include '../Modules/footer.php'; ?>
<footer>