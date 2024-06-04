<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des arguments $_GET</title>
</head>
<body>
    <table id="get-arguments-table">
        <thead>
            <tr>
                <th>Argument</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($_GET as $argument => $valeur) {
                echo "<tr><td>$argument</td><td>$valeur</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
