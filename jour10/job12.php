<?php
$servername = 'localhost';
$dbname = 'jour09';
$username = 'root';
$password = '';

//faire la connexion
$database = new PDO("mysql:host=$servername;dbname=$dbname;", $username, $password);

$query= $database->query("SELECT prenom, nom, naissance FROM etudiants
WHERE naissance BETWEEN '1998-01-01' AND '2018-01-01';"); 

// Afficher les résultats de la requête :
// $resultat = $query->fetchAll(PDO::FETCH_ASSOC);


?>


<!DOCTYPE html>
<html>
<head>
		<title>Jour 10</title>
		<meta charset="utf-8" />
		<style>
            * {
                border: 0;
                padding: 0;
            }
            td {
                border:solid 1px black;
                padding: 10px;
            }
        </style>
</head>
<body>

    <table>
        <thead>
        <td>Prénom</td>
        <td>Nom </td> 
        <td>Naissaince </td>

        </thead>

        <?php
         while ($resultat = $query->fetch()) { ?>
             
        <tbody> 
             <td><?= $resultat['prenom']?></td>
             <td><?= $resultat['nom']?></td>
             <td><?= $resultat['naissance']?></td>

        </tbody>
        <?php
        } 
        ?>
    </table>

        
</body>