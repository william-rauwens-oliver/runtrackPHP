<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <?php
    if (isset($_GET['nombre'])) {
        $nombre = intval($_GET['nombre']);
        if ($nombre % 2 === 0) {
            echo "Nombre pair";
        } else {
            echo "Nombre impair";
        }
    }
    ?>
    <form action="index.php" method="get">
        <label for="nombre">Entrez un nombre :</label>
        <input type="text" id="nombre" name="nombre">
        <input type="submit" value="Valider">
    </form>
</body>
</html>
