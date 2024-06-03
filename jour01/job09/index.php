<?php
function bonjour($jour) {
    if ($jour === true) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}

// Appel de la fonction avec true comme argument
bonjour(true);

// Appel de la fonction avec false comme argument
bonjour(false);
?>
