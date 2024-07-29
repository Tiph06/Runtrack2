<?php
 
$vitesses=[45,60,55,50,65];
$somme= 0; 

    foreach($vitesses as $vitesses){
        $somme += $vitesses;
    }
    $moyenne == $somme / count($vitesses);
    echo "les vitesses sont ".implode("," $vitesses) ."<br>";

    if ($moyenne>50){
        echo "Amede, la moyenne de la vitesse ($moyenne) dépasse 50";
    }

    else{
        echo "Félicitations, la moyenne de la vitesse ($moyenne) est en dessous de 50";
    }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <from action="" method="post"> 
        <label for="vitesse1">vitesse 1:</label> 
        <input type="number" id="vitesse1" name="vitesses[]" require> <br/>
   

        <button type="submit"> "Soumettre"</button> 
</form>
</body>
</html>