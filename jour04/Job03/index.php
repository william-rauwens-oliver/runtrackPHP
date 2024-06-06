<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['prenom']) && !empty($_POST['prenom'])) {
    $prenom = $_POST['prenom'];
    if (!isset($_SESSION['prenoms'])) {
        $_SESSION['prenoms'] = array();
    }
    $_SESSION['prenoms'][] = $prenom;
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reset'])) {
    $_SESSION['prenoms'] = array();
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de prénoms</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"] {
            width: calc(100% - 80px);
            padding: 8px;
            margin-top: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        button {
            padding: 8px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        li {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Ajouter des prénoms</h2>
        <form method="post">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>
            <button type="submit">Ajouter</button>
        </form>
        <h2>Liste des prénoms ajoutés :</h2>
        <ul>
            <?php
            if (isset($_SESSION['prenoms'])) {
                foreach ($_SESSION['prenoms'] as $prenom) {
                    echo "<li>$prenom</li>";
                }
            } else {
                echo "<li>Aucun prénom ajouté</li>";
            }
            ?>
        </ul>
        <form method="post">
            <button type="submit" name="reset">Réinitialiser la liste</button>
        </form>
    </div>
</body>
</html>
