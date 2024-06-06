<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        form {
            display: flex;
            flex-direction: column;
        }
        
        label {
            margin-bottom: 10px;
        }
        
        input[type="text"], input[type="submit"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['prenom'])) {
        $prenom = $_POST['prenom'];
        setcookie("prenom", $prenom, time() + (86400 * 30), "/");
        echo '<script>window.location = window.location.href;</script>';
    }
}

if (isset($_COOKIE['prenom'])) {
    echo "Bonjour " . htmlspecialchars($_COOKIE['prenom']) . " !";
    echo '<form method="post"><input type="submit" name="deco" value="Déconnexion"></form>';
} else {
    echo '<form method="post" id="connexionForm">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom">
            <input type="submit" name="connexion" value="Connexion">
          </form>';
}

if (isset($_POST['deco'])) {
    setcookie("prenom", "", time() - 3600, "/");
    echo '<script>window.location = window.location.href;</script>';
}
?>
</div>

</body>
</html>
