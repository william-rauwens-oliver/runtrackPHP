<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformation de chaîne</title>
</head>
<body>
    <form action="" method="post">
        <label for="str">Texte :</label>
        <input type="text" id="str" name="str" required><br>

        <label for="transformation">Transformation :</label>
        <select id="transformation" name="transformation">
            <option value="gras">Gras</option>
            <option value="cesar">César</option>
            <option value="plateforme">Plateforme</option>
        </select><br>

        <input type="submit" value="Transformer">
    </form>
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $str = $_POST['str'];
        $transformation = $_POST['transformation'];

        function makeBold($str) {
            return preg_replace_callback('/\b[A-Z][a-z]*\b/', function($matches) {
                return '<strong>' . $matches[0] . '</strong>';
            }, $str);
        }

        function cesarCipher($str, $shift = 2) {
            $result = '';
            $length = strlen($str);
            for ($i = 0; $i < $length; $i++) {
                $char = $str[$i];
                if (ctype_alpha($char)) {
                    $offset = ctype_upper($char) ? 65 : 97;
                    $result .= chr((ord($char) + $shift - $offset) % 26 + $offset);
                } else {
                    $result .= $char;
                }
            }
            return $result;
        }

        function plateforme($str) {
            return preg_replace('/\b(\w*me)\b/', '$1_', $str);
        }

        if ($transformation == 'gras') {
            echo makeBold($str);
        } elseif ($transformation == 'cesar') {
            echo cesarCipher($str);
        } elseif ($transformation == 'plateforme') {
            echo plateforme($str);
        }
    }
    ?>
</body>
</html>
