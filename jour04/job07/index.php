<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Maison</title>
</head>
<body>

<form method="POST">

    <label for="largeur">Largeur</label>
    <input type="text" name="largeur">

    <label for="hauteur">Hauteur</label>
    <input type="text" name="hauteur">
    <button>Valider</button>

</form>

<hr>

<style>

    pre {
        line-height: 1;
    }

    form {
      margin-bottom: 20px;
      padding: 20px;
      border-radius: 5px;
      background: white;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      font-family: arial ;
    }

    hr {
        margin: 20px 0;
        border: none;
        border-top: 5px solid #081388ff;
        width: 100%;
    }

    button {
        background-color : #081388ff;
        border-radius : 5px;
        padding : 5px;
        color : white;
        font-size : 15px;
        box-shadow : 0 0 5px #011a17ff;
        box-shadow: 0 0 2px #011a17ff;
    }

    button:hover {
        background-color : #042d67ff;
    }

</style>

<?php

    if (!empty($_POST["largeur"]) && !empty($_POST["hauteur"])) {
        $largeur = (int)$_POST["largeur"];
        $hauteur = (int)$_POST["hauteur"];

        echo "<pre>";
        
        for ($i = 0; $i < $hauteur; $i++) {
            echo str_repeat(" ", $hauteur - $i - 1);
            if ($i == 0) {
                
                echo "/\\";
            } else {
                echo "/";
                echo str_repeat(" ", $largeur + 2 * $i);
                echo "\\";
            }
            echo "\n";
        }
        
        for ($j = 0; $j < $hauteur; $j++) {
            echo "|" . str_repeat(" ", $largeur + 2 * ($hauteur - 1)) . "|\n";
        }
        echo "</pre>";
    }
    

?>
    
</body>
</html>