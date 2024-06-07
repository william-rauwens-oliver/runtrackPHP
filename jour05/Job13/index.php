<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capacité Moyenne des Salles</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
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
    <h1>Capacité Moyenne des Salles</h1>
    <table>
        <thead>
            <tr>
                <th>capacite_moyenne</th>
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

                $sql = "SELECT AVG(capacite) AS capacite_moyenne FROM salle";
                $stmt = $conn->query($sql);

                if ($stmt->rowCount() > 0) {
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>";
                        echo "<td>" . $row["capacite_moyenne"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td>Aucune donnée trouvée</td></tr>";
                }

            } catch (PDOException $e) {
                echo "Erreur de connexion : " . $e->getMessage();
            }

            $conn = null;
            ?>
        </tbody>
    </table>
</body>
</html>
