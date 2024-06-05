<?php
function leetSpeak($str) {
    $leetTable = array(
        'A' => '4',
        'a' => '4',
        'B' => '8',
        'b' => '8',
        'E' => '3',
        'e' => '3',
        'G' => '6',
        'g' => '6',
        'L' => '1',
        'l' => '1',
        'S' => '5',
        's' => '5',
        'T' => '7',
        't' => '7'
    );
    
    $leetStr = strtr($str, $leetTable);
    
    return $leetStr;
}

$input = "Hello World";
$output = leetSpeak($input);
echo $output;
?>