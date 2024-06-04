<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de Connexion</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username === "John" && $password === "Rambo") {
            echo "Ce n'est pas ma guerre";
        } else {
            echo "Votre pire cauchemar";
        }
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Se connecter">
    </form>
</body>
</html>
