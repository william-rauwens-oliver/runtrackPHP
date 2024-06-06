<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['prenom'])) {
        $prenom = $_POST['prenom'];
        setcookie("prenom", $prenom, time() + (86400 * 30), "/");
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
}


if (isset($_COOKIE['prenom'])) {
    echo "Bonjour " . $_COOKIE['prenom'] . " !";
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
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>
