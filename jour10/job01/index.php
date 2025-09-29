<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=jour09", "root", "");
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT prenom, nom, naissance, sexe, email FROM etudiants";
    $stmt = $pdo->query($sql);

    echo "<table border='1'>";
    echo "<tr><th>Prenom</th><th>Nom</th><th>Naissance</th><th>Sexe</th><th>Email</th></tr>";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row["prenom"] . "</td>";
        echo "<td>" . $row["nom"] . "</td>";
        echo "<td>" . $row["naissance"] . "</td>";
        echo "<td>" . $row["sexe"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
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
}
tr, td, th {
    padding: 10px;
    border-radius: 3px;
}
</style>





