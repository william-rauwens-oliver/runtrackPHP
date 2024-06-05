<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Produits</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h1>Liste des Produits</h1>

<?php
function calculerReduction($prix) {
    if ($prix > 100) {
        return $prix * 0.1; 
    } else {
        return 0;
    }
}

function genererTableauProduits($produits) {
    $html = "<table>
                <tr>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Réduction</th>
                    <th>Prix après réduction</th>
                </tr>";
    
    foreach ($produits as $produit) {
        $reduction = calculerReduction($produit['prix']);
        $prixApresReduction = $produit['prix'] - $reduction;
        
        $html .= "<tr>
                    <td>{$produit['nom']}</td>
                    <td>{$produit['prix']} €</td>
                    <td>{$produit['quantite']}</td>
                    <td>{$reduction} €</td>
                    <td>{$prixApresReduction} €</td>
                </tr>";
    }
    
    $html .= "</table>";
    
    return $html;
}

$produits = array(
    array('nom' => 'Carte Graphique', 'prix' => 120, 'quantite' => 2),
    array('nom' => 'Processeur', 'prix' => 80, 'quantite' => 1),
    array('nom' => 'Ram', 'prix' => 150, 'quantite' => 3)
);

echo genererTableauProduits($produits);
?>

</body>
</html>
