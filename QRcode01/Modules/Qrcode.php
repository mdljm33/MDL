<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Générateur de QR Code</title>
    <script src="https://cdn.jsdelivr.net/npm/qrcode@1.4.4/build/qrcode.min.js"></script> <!-- Inclusion de la bibliothèque QRCode.js -->
    
</head>
<body>

    <h1>Générateur de QR Code</h1>
    <input type="text" id="inputText" placeholder="Entrez du texte ou une URL" />
    <button onclick="generateQRCode()">Générer QR Code</button>

    <div id="qrcode"></div> <!-- Conteneur pour afficher le QR code -->

    <script>
        // Fonction pour générer un QR code
        function generateQRCode() {
            // Récupérer le texte ou l'URL de l'utilisateur
            var text = document.getElementById("inputText").value;

            // Vérifier si le champ n'est pas vide
            if (text.trim() === "") {
                alert("Veuillez entrer du texte ou une URL.");
                return;
            }

            // Effacer le QR code précédent (si présent)
            document.getElementById("qrcode").innerHTML = "";

            // Générer un nouveau QR code
            QRCode.toCanvas(document.getElementById("qrcode"), text, function (error) {
                if (error) {
                    console.error(error);
                    alert("Une erreur est survenue lors de la génération du QR Code.");
                }
            });
        }
    </script>

</body>
</html>
