<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test GET Form</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET)) {
    $numberOfArguments = count($_GET);
    echo "Nombre d'arguments GET : " . $numberOfArguments;
} else {
    echo "Aucun argument GET n'a été trouvé.";
}
?>

<form action="" method="get">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="age">Age:</label>
    <input type="text" id="age" name="age"><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>
