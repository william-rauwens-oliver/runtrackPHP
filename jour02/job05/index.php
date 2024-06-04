<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion</title>
</head>
<body>

<form action="" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST['username']) ? htmlspecialchars($_POST['username']) : '';
    $password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : '';

    if ($username === 'John' && $password === 'Rambo') {
        echo "<p>ce n'est pas ma guerre</p>";
    } else {
        echo "<p>votre pire cauchemar</p>";
    }
}
?>

</body>
</html>
