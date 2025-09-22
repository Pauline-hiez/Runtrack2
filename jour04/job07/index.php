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
    <input type="number" name="largeur">

    <label for="hauteur">Hauteur</label>
    <input type="number" name="hauteur">
    <button>Valider</button>

</form>

<hr>

<style>

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
        cursor: pointer;
    }

    button:hover {
        background-color : #042d67ff;
        width: 60px;
    }

</style>

<?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $largeur = isset($_POST['largeur']) ? (int)$_POST['largeur'] : 0;
    $hauteur = isset($_POST['hauteur']) ? (int)$_POST['hauteur'] : 0;
    if ($largeur < 2) $largeur = 2;
    if ($hauteur < 1) $hauteur = 1;

    
    $triBase = 2 * $hauteur - 1;
    $baseWidth = $largeur;
    if ($triBase > $baseWidth) $baseWidth = $triBase;

    $output = "";

    
    for ($i = 1; $i <= $hauteur; $i++) {
        $stars = 2 * $i - 1; 
        $paddingLeft = (int)(($baseWidth - $stars) / 2);
        $paddingRight = $baseWidth - $stars - $paddingLeft;

        
        for ($p = 0; $p < $paddingLeft; $p++) $output .= ' ';

        
        if ($i == 1) {
            $output .= '/\\';
        } else {
            
            $output .= '/';
            for ($m = 0; $m < $stars - 2; $m++) $output .= '-';
            $output .= '\\';
        }

        
        for ($p = 0; $p < $paddingRight; $p++) $output .= ' ';
        $output .= "\n";
    }

   
    for ($r = 0; $r < $hauteur; $r++) {
        $output .= '|';
        for ($c = 0; $c < $largeur - 2; $c++) $output .= ' ';
        $output .= "|\n";
    }

    echo '<pre style="font-family: monospace; line-height:1;">' . htmlspecialchars($output) . '</pre>';
}

?>

    


    
</body>
</html>