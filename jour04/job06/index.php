<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire type GET</title>
</head>
<body>

    <form method="GET">

        <input type="text" name="nombre">
        <button>Valider</button>

    </form>

<?php

    if (isset($_GET["nombre"]) && $_GET["nombre"] !== "") {
        $valeur = $_GET["nombre"];

    if (is_numeric($valeur)){
        if($valeur % 2==0) {
        echo "<p style='color:#0d9e8bff;'><strong>Nombre pair</strong></p>";
    } else {
        echo "<p style='color:#0d9e8bff;'><strong>Nombre impair</strong></p>";
    }

    } else {
          echo "<p style='color:red;'>Veuillez entrer un nombre valide.</p>";
      }
    }
    
?>

<style>

    body {
      font-family: Arial, sans-serif;
      background: #f7f7f7;
      padding: 20px;
    }

    form {
      margin-bottom: 20px;
      padding: 20px;
      border: 5px solid #0d9e8bff;
      border-radius: 5px;
      background: white;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    button {
        background-color : #0d9e8bff;
        border-radius : 5px;
        padding : 5px;
        color : white;
        font-size : 10px;
        box-shadow : 10px;
        box-shadow: 0 0 5px #011a17ff;
    }

    button:hover {
        background-color : #06463eff;
    }

</style>
    
</body>
</html>