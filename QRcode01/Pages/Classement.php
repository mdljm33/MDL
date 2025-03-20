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
      <h2>CLASSEMENT<h2>
      <?php
// Requête SQL pour récupérer les informations triées par score (du plus grand au plus petit)
$sql = "SELECT nom, prenom, classe, score FROM user ORDER BY score DESC";
$score = $conn->query($sql);

// Vérifie s'il y a des résultats
if ($score->num_rows > 0) {
    // Si des résultats sont trouvés, affiche les données dans un tableau
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Classement</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Classe</th>
                <th>Score</th>
            </tr>";
            
            $ranking_position = 1;  // Initialiser le compteur de classement

    // Affiche chaque ligne de résultat
    while($row = $score->fetch_assoc()) {


        echo "<tr>
                <td>" . $ranking_position . "e</td>  <!-- Affichage du classement -->
                <td>" . $row["nom"] . "</td>
                <td>" . $row["prenom"] . "</td>
                <td>" . $row["classe"] . "</td>
                <td>" . $row["score"] . "</td>
              </tr>";

        $ranking_position++;  // Incrémenter la position du classement
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