<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des salles</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Liste des salles</h1>
    <table>
        <thead>
            <tr>
                <th>Nom de la salle</th>
                <th>Capacité</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $dsn = 'mysql:host=localhost;dbname=jour05;charset=utf8';
            $username = 'root';
            $password = 'root';

            try {
                $connexion = new PDO($dsn, $username, $password);
                $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $requete = "SELECT nom, capacite FROM salle";
                $resultat = $connexion->query($requete);

                while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>" . $row['nom'] . "</td>";
                    echo "<td>" . $row['capacite'] . "</td>";
                    echo "</tr>";
                }

            } catch (PDOException $e) {
                echo "Erreur : " . $e->getMessage();
            }
            ?>
        </tbody>
    </table>
</body>
</html>
