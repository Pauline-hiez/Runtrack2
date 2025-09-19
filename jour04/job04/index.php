<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire POST</title>
</head>
<body>

    <form method="POST">

         <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
        <br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
        <br><br>

        <label for="email">Adresse E-mail</label>
        <input type="text" name="email" id="email">
        
        <br><br>

        <button type="submit">Se connecter</button>

    </form>
    
</body>
</html>

<style>

    body {
      font-family: Arial, sans-serif;
      background: #f7f7f7;
      padding: 20px;
    }

    form {
      margin-bottom: 20px;
    }

    button {
        background-color : #0d9e8bff;
        border-radius : 5px;
        padding : 10px;
        color : white;
        font-size : 15px;
        box-shadow : 10px;
        box-shadow: 0 0 5px #011a17ff;
    }

    button:hover {
        background-color : #06463eff;
    }

    table {
      border-collapse: collapse;
      width: 60%;
      background: #fff;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      border-radius: 6px;
      overflow: hidden;
    }

    th, td {
      padding: 12px 15px;
      text-align: left;
    }

    th {
      background-color: #0d9e8bff;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    tr:hover {
      background-color: #d5e7e3ff;
    }

</style>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        echo "<table border='1' cellpadding='5'>";
        echo "<tr><th>Argument</th><th>Valeur</th></tr>";
        
        
        foreach ($_POST as $argument => $valeur) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($argument) . "</td>";
            echo "<td>" . htmlspecialchars($valeur) . "</td>";
            echo "</tr>";
        }
        
        echo "</table>";
    }
    ?>



