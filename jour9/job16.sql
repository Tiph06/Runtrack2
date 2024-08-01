SELECT etage.nom AS 'Biggest Room', MAX(salles.capacite)
FROM etage
INNER JOIN salles ON etage.id = salles.id_etage;