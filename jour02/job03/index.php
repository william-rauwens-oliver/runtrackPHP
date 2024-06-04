<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des arguments $_GET</title>
</head>
    <form method="POST" action="index.php">
        <label for="input1">Argument 1 :</label>
        <input type="text" name="input1" id="input1">
        
        <label for="input2">Argument 2 :</label>
        <input type="text" name="input2" id="input2">
        
        <input type="submit" value="Envoyer">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $count = count($_POST);
        echo "Nombre d'arguments POST : " . $count;
    }
    ?>
</body>
</html>
