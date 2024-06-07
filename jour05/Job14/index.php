<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Étudiants nés entre 1998 et 2018</title>
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
    <h1>Étudiants nés entre 1998 et 2018</h1>
    <table>
        <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Date de Naissance</th>
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

                $sql = "SELECT prenom, nom, naissance FROM etudiant WHERE naissance BETWEEN '1998-01-01' AND '2018-12-31'";
                $stmt = $conn->query($sql);

                if ($stmt->rowCount() > 0) {
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row["prenom"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["nom"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["naissance"]) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>Aucune donnée trouvée</td></tr>";
                }

            } catch (PDOException $e) {
                echo "<tr><td colspan='3'>Erreur de connexion : " . htmlspecialchars($e->getMessage()) . "</td></tr>";
            }

            $conn = null;
            ?>
        </tbody>
    </table>
</body>
</html>
