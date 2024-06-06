<?php
session_start();

if (!isset($_SESSION['nbVisites'])) {
    $_SESSION['nbVisites'] = 0;
}

$_SESSION['nbVisites']++;

if (isset($_POST['reset'])) {
    $_SESSION['nbVisites'] = 0;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Compteur de visites</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            font-size: 2em;
            color: #333;
        }
        .counter {
            font-size: 3em;
            color: #007bff;
            margin: 20px 0;
        }
        .reset-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 1em;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .reset-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Nombre de visites</h1>
        <div class="counter"><?php echo $_SESSION['nbVisites']; ?></div>

        <form method="post">
            <button type="submit" name="reset" class="reset-button">Réinitialiser le compteur</button>
        </form>
    </div>
</body>
</html>
