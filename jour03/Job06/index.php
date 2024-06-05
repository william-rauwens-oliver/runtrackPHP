<?php
function leetSpeak($str){
    $str = str_replace(['a', 'A'], '4', $str);
    $str = str_replace(['b', 'B'], '8', $str);
    $str = str_replace(['e', 'E'], '3', $str);
    $str = str_replace(['g', 'G'], '6', $str);
    $str = str_replace(['l', 'L'], '1', $str);
    $str = str_replace(['s', 'S'], '5', $str);
    $str = str_replace(['t', 'T'], '7', $str);
    return $str;
}
echo leetSpeak("I am a champion");
?>