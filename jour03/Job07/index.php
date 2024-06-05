<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformation de chaîne</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 350px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"],
        select {
            width: calc(100% - 22px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="str">Texte :</label>
                <input type="text" id="str" name="str" required>
            </div>

            <div class="form-group">
                <label for="transformation">Transformation :</label>
                <select id="transformation" name="transformation">
                    <option value="gras">Gras</option>
                    <option value="cesar">César</option>
                    <option value="plateforme">Plateforme</option>
                </select>
            </div>

            <input type="submit" value="Transformer">
        </form>

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

            echo '<div class="result">';
            if ($transformation == 'gras') {
                echo makeBold($str);
            } elseif ($transformation == 'cesar') {
                echo cesarCipher($str);
            } elseif ($transformation == 'plateforme') {
                echo plateforme($str);
            }
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
