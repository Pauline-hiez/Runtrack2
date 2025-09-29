<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=jour09", "root", "");
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT SUM(superficie) AS superficie_totale FROM etage";
    $stmt = $pdo->query($sql);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    echo "<table border='1'>";
    echo "<tr><th>Superficie totale</th></tr>"; 
    echo "<tr><td>" . htmlspecialchars($result['superficie_totale']) . "</td></tr>";
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