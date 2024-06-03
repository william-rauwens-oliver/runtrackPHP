<?php
function calcule($nombre1, $operation, $nombre2) {
    switch ($operation) {
        case '+':
            return $nombre1 + $nombre2;
        case '-':
            return $nombre1 - $nombre2;
        case '*':
            return $nombre1 * $nombre2;
        case '/':
            if ($nombre2 != 0) {
                return $nombre1 / $nombre2;
            } else {
                return "Erreur : Division par zéro";
            }
        case '%':
            if ($nombre2 != 0) {
                return $nombre1 % $nombre2;
            } else {
                return "Erreur : Division par zéro";
            }
        default:
            return "Erreur : Opération non supportée";
    }
}

// Exemples d'appel de la fonction
echo calcule(10, '+', 5) . "<br>";  // Affichera 15
echo calcule(10, '-', 5) . "<br>";  // Affichera 5
echo calcule(10, '*', 5) . "<br>";  // Affichera 50
echo calcule(10, '/', 5) . "<br>";  // Affichera 2
echo calcule(10, '%', 3) . "<br>";  // Affichera 1
echo calcule(10, '/', 0) . "<br>";  // Affichera "Erreur : Division par zéro"
echo calcule(10, '#', 5) . "<br>";  // Affichera "Erreur : Opération non supportée"
?>
