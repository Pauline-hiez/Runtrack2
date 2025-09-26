USE "jour09";

SELECT e.nom as etage, s.nom as "Biggest Room", s.capacite 
FROM salles s 
JOIN etage e ON s.id_etage = e.id 
WHERE s.capacite =(SELECT MAX(capacite)
FROM salles);