<?php
// Fonction pour appliquer la réduction
function appliquer_reduction($prix) {
    if ($prix > 100) {
        return $prix * 0.9; // Réduction de 10%
    } else {
        return $prix;
    }
}

// Fonction pour créer un produit
function creer_produit($nom, $prix, $quantite) {
    return array('nom' => $nom, 'prix' => $prix, 'quantite' => $quantite);
}

// Fonction pour créer une liste de produits avec réduction
function creer_liste_produits() {
    $produits = array(
        creer_produit("Ordinateur portable", 120, 2),
        creer_produit("Téléphone", 80, 3),
        creer_produit("Casque audio", 50, 5),
        creer_produit("Écran 27 pouces", 200, 1)
    );
    foreach ($produits as &$produit) {
        $produit['prix'] = appliquer_reduction($produit['prix']);
    }
    return $produits;
}

// Fonction pour générer une page HTML
function generer_page_html($produits) {
    $html = "<html><head><title>Liste des produits</title></head><body>";
    $html .= "<h1>Liste des produits</h1>";
    $html .= "<table border='1'><tr><th>Nom</th><th>Prix</th><th>Quantité</th></tr>";
    foreach ($produits as $produit) {
        $html .= "<tr><td>{$produit['nom']}</td><td>{$produit['prix']} €</td><td>{$produit['quantite']}</td></tr>";
    }
    $html .= "</table></body></html>";
    return $html;
}

// Appel des fonctions pour créer la liste de produits et générer la page HTML
$liste_produits = creer_liste_produits();
$page_html = generer_page_html($liste_produits);

// Écriture du contenu HTML dans un fichier
$file = fopen('liste_produits.html', 'w');
fwrite($file, $page_html);
fclose($file);

echo "Fichier 'liste_produits.html' généré avec succès.";
?>
