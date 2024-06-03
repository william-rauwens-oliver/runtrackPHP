<?php
$integerVar = 10;
$floatVar = 3.14;
$stringVar = "Hello";
$boolVar = true;

echo '<table border="1">';
echo '<thead>';
echo '<tr>';
echo '<th>Type</th>';
echo '<th>Nom</th>';
echo '<th>Valeur</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

// Ligne pour la variable entière
echo '<tr>';
echo '<td>Integer</td>';
echo '<td>$integerVar</td>';
echo '<td>' . $integerVar . '</td>';
echo '</tr>';

// Ligne pour la variable flottante
echo '<tr>';
echo '<td>Float</td>';
echo '<td>$floatVar</td>';
echo '<td>' . $floatVar . '</td>';
echo '</tr>';

// Ligne pour la chaîne de caractères
echo '<tr>';
echo '<td>String</td>';
echo '<td>$stringVar</td>';
echo '<td>' . $stringVar . '</td>';
echo '</tr>';

// Ligne pour la variable booléenne
echo '<tr>';
echo '<td>Boolean</td>';
echo '<td>$boolVar</td>';
echo '<td>' . ($boolVar ? 'true' : 'false') . '</td>';
echo '</tr>';

echo '</tbody>';
echo '</table>';
?>
