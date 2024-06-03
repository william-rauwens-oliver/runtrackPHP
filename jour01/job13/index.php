<?php
function toLeetSpeak($str) {
    // Tableau de correspondances leet speak
    $leet = [
        'a' => '4', 'A' => '4',
        'e' => '3', 'E' => '3',
        'i' => '1', 'I' => '1',
        'o' => '0', 'O' => '0',
        't' => '7', 'T' => '7',
        's' => '5', 'S' => '5',
        'b' => '8', 'B' => '8',
        'g' => '6', 'G' => '6',
        'z' => '2', 'Z' => '2'
    ];

    // Conversion de la chaîne de caractères en leet speak
    $leetStr = '';
    $length = strlen($str);
    for ($i = 0; $i < $length; $i++) {
        $char = $str[$i];
        if (array_key_exists($char, $leet)) {
            $leetStr .= $leet[$char];
        } else {
            $leetStr .= $char;
        }
    }
    return $leetStr;
}

$inputStr = "Bonjour tout le monde!";
echo toLeetSpeak($inputStr);
?>
