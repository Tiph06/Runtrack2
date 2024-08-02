<?php
$servername = 'localhost';
$dbname = 'jour09';
$username = 'root';
$password = '';

//faire la connexion
$database = new PDO("mysql:host=$servername;dbname=$dbname;", $username, $password);

$query= $database->query("SELECT * FROM salles ORDER BY capacite ASC "); 

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

        <td>Nom </td> 
        <td>Etages </td>
        <td>Capacité </td>

        </thead>

        <?php
         while ($resultat = $query->fetch()) { ?>
             
        <tbody> 

             <td><?= $resultat['nom']?></td>
             <td><?= $resultat['id_etage']?></td>
             <td><?= $resultat['capacite']?></td>

        </tbody>
        <?php
        } 
        ?>
    </table>

        
</body>