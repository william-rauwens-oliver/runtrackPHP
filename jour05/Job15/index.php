<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salles et leurs étages</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
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
    <h1>Salles et leurs étages</h1>
    <table>
        <thead>
            <tr>
                <th>Nom de la salle</th>
                <th>Nom de l'étage</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "jour05";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "SELECT salle.nom AS salle_nom, etage.nom AS etage_nom
                        FROM salle
                        JOIN etage ON salle.id_etage = etage.id";
                $stmt = $conn->query($sql);

                if ($stmt->rowCount() > 0) {
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row["salle_nom"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["etage_nom"]) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'>Aucune donnée trouvée</td></tr>";
                }

            } catch (PDOException $e) {
                echo "<tr><td colspan='2'>Erreur de connexion : " . htmlspecialchars($e->getMessage()) . "</td></tr>";
            }

            $conn = null;
            ?>
        </tbody>
    </table>
</body>
</html>
