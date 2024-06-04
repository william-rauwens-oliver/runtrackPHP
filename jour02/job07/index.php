<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire pour Dessiner une Maison</title>
    <style>
        pre {
            font-size: 16px;
            line-height: 1.2;
        }
    </style>
</head>
<body>

<form action="" method="post">
    <label for="largeur">Largeur:</label>
    <input type="number" id="largeur" name="largeur" required><br><br>
    <label for="hauteur">Hauteur:</label>
    <input type="number" id="hauteur" name="hauteur" required><br><br>
    <input type="submit" value="Dessiner la maison">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['largeur']) && isset($_POST['hauteur'])) {
    $largeur = intval($_POST['largeur']);
    $hauteur = intval($_POST['hauteur']);

    if ($largeur > 0 && $hauteur > 0) {
        // Générer la maison ASCII
        echo "<pre>";

        // Toit de la maison
        $roof_height = ceil($largeur / 2);
        for ($i = 0; $i < $roof_height; $i++) {
            echo str_repeat(" ", $roof_height - $i - 1);
            echo "/";
            echo str_repeat(" ", $i * 2);
            echo "\\\n";
        }

        // Corps de la maison
        for ($j = 0; $j < $hauteur; $j++) {
            echo "|";
            echo str_repeat(" ", $largeur - 2);
            echo "|\n";
        }

        // Bas de la maison
        echo str_repeat("-", $largeur);

        echo "</pre>";
    } else {
        echo "<p>Veuillez entrer des valeurs positives pour la largeur et la hauteur.</p>";
    }
}
?>

</body>
</html>
