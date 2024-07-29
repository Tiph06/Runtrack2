

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html><?php

$score = $_GET["a"];
    if($score >= 10) {
        echo 'victoire';
} else if ($score < 10) {
        echo 'defaite';
}

?>