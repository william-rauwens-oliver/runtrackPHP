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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de Visites</title>
</head>
<body>
    <h1>Compteur de Visites</h1>
    <p>Nombre de visites : <span id="visit-count"><?php echo $nbVisites; ?></span></p>
    <form method="post" action="">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>
