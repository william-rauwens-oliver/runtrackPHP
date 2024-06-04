<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test POST Form</title>
</head>
<body>

<form action="" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="age">Age:</label>
    <input type="text" id="age" name="age"><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
    // Compte le nombre d'éléments dans le tableau $_POST
    $numberOfArguments = count($_POST);
    echo "Nombre d'arguments POST : " . $numberOfArguments;
} else {
    echo "Aucun argument POST n'a été trouvé.";
}
?>

</body>
</html>
