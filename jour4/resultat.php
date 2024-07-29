
<?php
 
 $resultat= 0;



 if (isset($_GET['n1']) &&isset($_GET['n2']) &&isset($_GET['calcul'])) {
    $a = $_GET['n1'];
    $b = $_GET['n2'];
    $calcul = $_GET['calcul'];

    if ($calcul == '1') {
        $resultat = $a + $b;

    }

    elseif ($calcul == '2') {
        $resultat= $a - $b;
        

    }

    elseif ($calcul == '3') {
        $resultat= $a * $b;
    
    }

    elseif ($resultat == '4') {
        if ($a == 0 || $b == 0){
            $resultat= 'Division par ZERO impossible';
        
        }

        else{
        $resultat= $a / $b;
        } 
    
    }

    elseif ($resultat == '5') {
        $resultat= $a % $b;
    }
} ;

    echo $resultat;
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles.css" media="all" type="text/css" />
    <title>Document</title>
</head>
<body>
    <h1>Calculatrice<h1>
    
<form action="" method="get" >

        <p> Valeur "a"<input type="number" name="n1"></p>
        <p> Valeur "b"<input type="number" name="n2"></p>
    <select name="calcul" >
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