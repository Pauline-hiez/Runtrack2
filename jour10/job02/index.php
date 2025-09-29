<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=jour09", "root", "");
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT nom, capacite FROM salles";
    $stmt = $pdo->query($sql);

    echo "<table border='1'>";
    echo "<tr><th>Nom</th><th>Capacité</th></tr>";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row["nom"] . "</td>";
        echo "<td>" . $row["capacite"] . "</td>";
        echo "</tr>";
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