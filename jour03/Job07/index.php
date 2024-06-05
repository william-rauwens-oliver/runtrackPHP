<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformation de chaîne</title>
</head>
<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="str">Chaîne :</label><br>
        <input type="text" id="str" name="str"><br><br>
        
        <label for="fonction">Fonction :</label><br>
        <select id="fonction" name="fonction">
            <option value="gras">Gras</option>
            <option value="cesar">César</option>
            <option value="plateforme">Plateforme</option>
        </select><br><br>

        <input type="submit" value="Valider">
    </form>

    <?php
    function mettreEnGras($str) {
        return preg_replace('/\b([A-Z][a-z]*)\b/', '<strong>$1</strong>', $str);
    }

    function cesar($str, $decalage = 2) {
        $resultat = '';
        $longueur = strlen($str);
        for ($i = 0; $i < $longueur; $i++) {
            $caractere = $str[$i];
            if (ctype_alpha($caractere)) {
                $majuscule = ctype_upper($caractere);
                $caractere = chr((ord($caractere) + $decalage - ($majuscule ? 65 : 97)) % 26 + ($majuscule ? 65 : 97));
            }
            $resultat .= $caractere;
        }
        return $resultat;
    }

    function ajouterGuillemets($str) {
        return preg_replace('/(\b\w+me)\b/', '"$1"', $str);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $str = $_POST["str"];
        $fonction = $_POST["fonction"];

        switch ($fonction) {
            case "gras":
                $resultat = mettreEnGras($str);
                break;
            case "cesar":
                $resultat = cesar($str);
                break;
            case "plateforme":
                $resultat = ajouterGuillemets($str);
                break;
            default:
                $resultat = "Fonction non reconnue";
        }

        echo "<p>Résultat de la transformation : $resultat</p>";
    }
    ?>
</body>
</html>
