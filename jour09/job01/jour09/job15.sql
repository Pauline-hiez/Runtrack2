USE "jour08";

SELECT s.nom as salles, e.nom as etage
FROM salles s
JOIN etage e ON s.id_etage = e.id;