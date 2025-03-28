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
        <h2>CLASSEMENT</h2>
        <?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include '../Modules/bd.php'; // Connexion à la base de données

// Vérifier si un utilisateur est connecté
$utilisateurConnecte = isset($_SESSION['nom_utilisateur']) ? trim($_SESSION['nom_utilisateur']) : '';

// Récupérer les 10 meilleurs scores
$sql_top10 = "SELECT nom, prenom, classe, score FROM user ORDER BY score DESC LIMIT 10";
$result_top10 = $conn->query($sql_top10);

// Récupérer le classement de l'utilisateur connecté
$sql_user_rank = "SELECT nom, prenom, classe, score, 
                  (SELECT COUNT(*) + 1 FROM user WHERE score > u.score) AS rank 
                  FROM user u WHERE nom = ?";
$stmt = $conn->prepare($sql_user_rank);
$stmt->bind_param("s", $utilisateurConnecte);
$stmt->execute();
$result_user_rank = $stmt->get_result();
$user_data = $result_user_rank->fetch_assoc();

if ($result_top10->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Classement</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Classe</th>
                <th>Score</th>
            </tr>";

    $ranking_position = 1;
    $isUserInTop10 = false;

    while ($row = $result_top10->fetch_assoc()) {
        $nomActuel = trim(strtolower($row["nom"]));
        $nomConnecte = trim(strtolower($utilisateurConnecte));

        // Vérifier si c'est l'utilisateur connecté
        if ($nomActuel === $nomConnecte) {
            $highlight_class = 'style="background-color: yellow; font-weight: bold;"';
            $isUserInTop10 = true;
        } else {
            $highlight_class = '';
        }

        echo "<tr $highlight_class>
                <td>" . $ranking_position . "e</td>
                <td>" . htmlspecialchars($row["nom"]) . "</td>
                <td>" . htmlspecialchars($row["prenom"]) . "</td>
                <td>" . htmlspecialchars($row["classe"]) . "</td>
                <td>" . htmlspecialchars($row["score"]) . "</td>
              </tr>";

        $ranking_position++;
    }

    // N'affiche pas la ligne de l'utilisateur connecté s'il est déjà dans le top 10
    if ($user_data && !$isUserInTop10) {
        $highlight_class = 'style="background-color: yellow; font-weight: bold;"';
        echo "<tr $highlight_class>
                <td>" . $user_data["rank"] . "e</td>
                <td>" . htmlspecialchars($user_data["nom"]) . "</td>
                <td>" . htmlspecialchars($user_data["prenom"]) . "</td>
                <td>" . htmlspecialchars($user_data["classe"]) . "</td>
                <td>" . htmlspecialchars($user_data["score"]) . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "<p>Aucun résultat trouvé.</p>";
}

$conn->close();
?>


</body>

<footer>
    <?php include '../Modules/footer.php'; ?>
</footer>
</html>
