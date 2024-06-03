<?php
$excluded_numbers = [26, 37, 88, 1111];

for ($i = 0; $i <= 1337; $i++) {
    if (in_array($i, $excluded_numbers)) {
        continue;
    }
    echo "$i<br>";
}
?>
