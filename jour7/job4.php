<?php

$a= 0;
$b= 0;
$operation= 0;

function calcule($a, $operation, $b){
    if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['operation'])) {
        $a = $_GET['a'] ?? 0;
        $b = $_GET['b'] ?? 0;
        $operation = $_GET['operation'] ?? 0;

    if ($operation == '1') {
        $resultat = $a + $b;
        return $resultat;

    }

    elseif ($operation == '2') {
        $resultat= $a - $b;
        return $resultat;

    }

    elseif ($operation == '3') {
        $resultat= $a * $b;
        return $resultat;
    }

    elseif ($operation == '4') {
        if ($a == 0 || $b == 0){
            $resultat= 'Division par ZERO impossible';
            return $resultat;
        }

        else{
            $resultat= $a / $b;
            return $resultat;

        } 
    
    }

    elseif ($operation == '5') {
        $resultat= $a % $b;
        return $resultat;
        }
    }
}
echo '<br/><br/>Resultat:&nbsp '.
calcule($_GET['a'] ?? 0,$_GET['operation'] ?? 0,$_GET['b'] ?? 0);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles.css" media="all" type="text/css" />
    <title>Job 4</title>
</head>
<body>
    
<form action="" method="get" >

        <p> Valeur "a"<input type="number" name="a"></p>
        <p> Valeur "b"<input type="number" name="b"></p>
    <select name="operation" >
            <option value="1">Addition </option>
            <option value="2">Soustarction </option>
            <option value="3">Multiplication </option>
            <option value="4">Division </option>
            <option value="5">Modulo </option>
    </select>

    <input type="submit" name="submit" value="Calculer">
    <input type="reset" name="reset" value="Effacer">
</form>

    
   

  </form>
    </body>
</html>