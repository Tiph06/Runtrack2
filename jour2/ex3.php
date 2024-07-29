<?php

$painauchocolat = 0;
$croissant = 0;
$brioche = 0;

$etudiant = $_GET["name"];
 echo $etudiant; 
if ($etudiant == "Theo") {
        $painauchocolat = 3;
        $brioche = 2;
}
    echo $painauchocolat;
    echo $brioche;

if ($etudiant == "Walid") {
        $painauchocolat = 7;
        $croissant = 6;
}
    echo $painauchocolat;
    echo $croissant;
?>
