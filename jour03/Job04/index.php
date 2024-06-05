<?php
function calcule($nombre1, $operateur, $nombre2) {
    switch ($operateur) {
        case '+':
            return $nombre1 + $nombre2;
            break;
        case '-':
            return $nombre1 - $nombre2;
            break;
        case '*':
            return $nombre1 * $nombre2;
            break;
        case '/':
            if ($nombre2 != 0) {
                return $nombre1 / $nombre2;
            } else {
                return "Division par zéro impossible";
            }
            break;
        case '%':
            if ($nombre2 != 0) {
                return $nombre1 % $nombre2;
            } else {
                return "Division par zéro impossible";
            }
            break;
        default:
            return "Opérateur invalide";
    }
}

$resultat = calcule(5, '+', 3);
echo "Résultat : " . $resultat;


?>