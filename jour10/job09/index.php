<?php
$pdo = new PDO("mysql:host=localhost;dbname=jour09;charset=utf8", "root", "");


$stmt = $pdo->query("SELECT * FROM salles ORDER BY capacite DESC");
$salles = $stmt->fetchAll(PDO::FETCH_ASSOC);


echo "<table border='1'>";


if ($salles) {
    echo "<tr>";
    foreach (array_keys($salles[0]) as $col) {
        echo "<th>" . htmlspecialchars($col) . "</th>";
    }
    echo "</tr>";

    
    foreach ($salles as $row) {
        echo "<tr>";
        foreach ($row as $val) {
            echo "<td>" . htmlspecialchars($val) . "</td>";
        }
        echo "</tr>";
    }
}

echo "</table>";
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