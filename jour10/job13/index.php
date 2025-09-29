<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=jour09", "root", "");
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT s.nom AS nom_salle, e.nom AS nom_etage, s.capacite FROM salles s JOIN etage e ON s.id_etage = e.id";
    $stmt = $pdo->query($sql);

    echo "<table border='1'>";
    echo "<tr><th>Nom de la salle</th><th>Nom de l'étage</th><th>Capacité</th></tr>";
    
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr><td>" . htmlspecialchars($result['nom_salle']) . "</td><td>" . htmlspecialchars($result['nom_etage']) . "</td><td>" . htmlspecialchars($result['capacite']) . "</td></tr>";
    }
    
    echo "</table>";
}

catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

?>

<style>
table { 
    font-family: arial; 
    padding: 10px;
    display: flex;
    justify-content: center;
    border-collapse: collapse;
}
tr, td, th {
    padding: 10px;
    border-radius: 3px;
}
</style>