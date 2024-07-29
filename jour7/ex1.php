<?php


$vitesses = [55, 60, 45, 70, 50];

        // Calculer la somme des vitesses:
$somme = 0;
foreach ($vitesses as $vitesse) {
    $somme += $vitesse;
}

        // Calculer la moyenne des vitesses:
$moyenne = $somme / count($vitesses);

        // Afficher les résultats:
echo "Les vitesses sont : " . implode(", ", $vitesses) . "<br>";
echo "La somme des vitesses est" : $somme "km/h<br>";
echo "La moyenne des vitesses est" : $moyenne "km/h<br>";

        // Afficher le message 
if ($moyenne > 50) {
    echo "Amende: La vitesse moyenne dépasse 50 km/h.";
} else {
    echo "Félicitations: La vitesse moyenne est inférieure ou égale à 50 km/h.";
}
?>





<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles.css" media="all" type="text/css" />
    <title>Exercice 1</title>
</head>
<body>
    <form action="" method="post">
        <label for="vitesse1">Vitesse 1:</label>
        <input type="number" id="" name="vitesse[]" required><br>

        <label for="vitesse2">Vitesse 2:</label>
        <input type="number" id="" name="vitesse[]" required><br>

        <label for="vitesse3">Vitesse 3:</label>
        <input type="number" id="" name="vitesse[]" required><br>

        <label for="vitesse4">Vitesse 4:</label>
        <input type="number" id="" name="vitesse[]" required><br>

        <label for="vitesse5">Vitesse 5:</label>
        <input type="number" id="" name="vitesse[]" required><br>

        <button type="submit">Soumettre</button>
    </form>
</body>
</html>
