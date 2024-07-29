<?php

function gras($str) {
    $words = explode(" ", $str);
    $result = "";

    foreach ($words as $word) {
        if (ctype_upper($word[0])) {
            $result .= "<b>$word</b> ";
        } else {
            $result .= "$word ";
        }
    }

    return trim($result);
}

function cesar($str, $decalage = 2) {
    $result = '';
    $decalage = (int)$decalage;

    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];

        if (ctype_alpha($char)) {
            $ascii = ord($char);
            $offset = ctype_upper($char) ? 65 : 97;
            $newAscii = ($ascii + $decalage - $offset) % 26 + $offset;
            $result .= chr($newAscii);
        } else {
            $result .= $char;
        }
    }

    return $result;
}

function plateforme($str) {
    $words = explode(" ", $str);
    $result = "";

    foreach ($words as $word) {
        if (substr($word, -2) === "me") {
            $result .= $word . "_ ";
        } else {
            $result .= $word . " ";
        }
    }

    return trim($result);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = $_POST['str'];
    $fonction = $_POST['fonction'];
    $decalage = isset($_POST['decalage']) ? $_POST['decalage'] : 2;
    $result = '';

    switch ($fonction) {
        case 'gras':
            $result = gras($str);
            break;
        case 'cesar':
            $result = cesar($str, $decalage);
            break;
        case 'plateforme':
            $result = plateforme($str);
            break;
    }

    echo "<p>Result: $result</p>";
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job 07</title>
</head>
<body>
    <form action="process.php" method="post">
        <label for="str">Texte:</label>
        <input type="text" id="str" name="str" required>
        
        <label for="fonction">Fonction:</label>
        <select id="fonction" name="fonction">
            <option value="gras">gras</option>
            <option value="cesar">cesar</option>
            <option value="plateforme">plateforme</option>
        </select>

        <label for="decalage">Decalage (only for cesar):</label>
        <input type="number" id="decalage" name="decalage" value="2">
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>
