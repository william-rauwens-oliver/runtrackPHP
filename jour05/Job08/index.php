<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre total d'étudiants</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
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
    <h1>Nombre total d'étudiants</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre d'étudiants</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "jour05";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT COUNT(*) AS nb_etudiants FROM etudiant";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["nb_etudiants"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td>Aucun résultat trouvé.</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>
