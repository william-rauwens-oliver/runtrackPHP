<?php
session_start();

if (isset($_COOKIE['nbVisites'])) {
    $nbVisites = $_COOKIE['nbVisites'] + 1;
} else {
    $nbVisites = 1;
}

setcookie('nbVisites', $nbVisites, time() + (365 * 24 * 60 * 60));

if (isset($_POST['reset'])) {
    setcookie('nbVisites', '', time() - 3600);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de Visites</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
        }
        p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }
        button {
            padding: 10px 20px;
            font-size: 1em;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Compteur de Visites</h1>
        <p>Nombre de visites : <span id="visit-count"><?php echo $nbVisites; ?></span></p>
        <form method="post" action="">
            <button type="submit" name="reset">Réinitialiser</button>
        </form>
    </div>
</body>
</html>
