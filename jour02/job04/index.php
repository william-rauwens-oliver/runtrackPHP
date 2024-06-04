<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire POST</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = $_POST["nom"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        
        echo "<table>";
        echo "<tr><th>Champ</th><th>Valeur</th></tr>";
        echo "<tr><td>Nom</td><td>$nom</td></tr>";
        echo "<tr><td>Email</td><td>$email</td></tr>";
        echo "<tr><td>Message</td><td>$message</td></tr>";
        echo "</table>";
    }
    ?>
    <form method="post" action="">
        <input type="text" name="nom" placeholder="Nom">
        <input type="email" name="email" placeholder="Email">
        <textarea name="message" placeholder="Message"></textarea>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
