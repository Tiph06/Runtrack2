SELECT etage.nom, salles.nom 
FROM etage
INNER JOIN salles ON etage.id = salles.id_etage;