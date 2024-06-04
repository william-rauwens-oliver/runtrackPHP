<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire GET pour Nombre Pair ou Impair</title>
</head>
<body>

<form action="" method="get">
    <label for="nombre">Entrez un nombre:</label>
    <input type="text" id="nombre" name="nombre"><br><br>
    <input type="submit" value="Vérifier">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['nombre'])) {
    $nombre = htmlspecialchars($_GET['nombre']);
    if (is_numeric($nombre)) {
        if ($nombre % 2 == 0) {
            echo "<p>Nombre pair</p>";
        } else {
            echo "<p>Nombre impair</p>";
        }
    } else {
        echo "<p>Veuillez entrer un nombre valide.</p>";
    }
}
?>

</body>
</html>
