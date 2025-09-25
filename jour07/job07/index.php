<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    
</head>
<body>

    <form method="POST">

        <input type="text" name="str">

        <select name="fonction">
            <option value="gras">Gras</option>
            <option value="cesar">Cesar</option>
            <option value="plateforme">Plateforme</option>
        </select>

        <button>Envoyer</button>

    </form>

<?php

// Gras

function gras($str) {
    $resultat = "";
    $mot = "";
    $i = 0;

while (true) {
    $c = isset($str[$i]) ? $str[$i] : " ";
    if ($c === " " || $c === " ") {
        if ($mot !== "") {
        $premiere = $mot [0];
        if ($premiere >= "A" && $premiere <= "Z") {
            $resultat .= "<b>" . $mot . "</b>";
        } 
        else {
            $resultat .= $mot;
        }
        $mot = "";
    }

        if ($c === " ") $resultat .= " ";
        if (!isset($str[$i])) break;
    }
        else {
        $mot .= $c;
    }
    $i++;
    }    
return $resultat;
    }

// Cesar

function cesar($str, $decalage = 2) {
    $resultat = "";
    $i = 0;

    while (isset($str[$i])) {
        $c = $str[$i];

        if ($c >= "a" && $c <= "z") {
        $decale = (ord($c) - ord("a") + $decalage) % 26;
        $resultat .= chr(ord("a") + $decale);
    } 
        elseif ($c >= "A" && $c <= "Z") {
        $decale = (ord($c) - ord("A") + $decalage) % 26;
        $resultat .= chr(ord("A") + $decale);
    } 
        else {
        $resultat .= $c;
    } 

    $i++;

    }

    return $resultat;

}

//"me"

function plateforme($str) {
    $resultat = "";
    $mot = "";
    $i = 0;

    while (true) {
        $c = isset($str[$i]) ? $str[$i] : " ";
        if ($c === " " || $c === " ") {
        
            if ($mot !== " ") {
                $longueur = 0;
                while (isset($mot[$longueur])) $longueur++;
                if ($longueur >= 2 && $mot[$longueur-2] === "m" && $mot[$longueur-1] === "e") {
                    $mot .= "_";
                }
                $resultat .= $mot;
                $mot = "";
            }
            if ($c === " ") $resultat .= " ";
            if (!isset($str[$i])) break;
        } 
        else {
            $mot .= $c;
        }
    $i++;    
    }

return $resultat;   
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $str = $_POST["str"];
    $fonction = $_POST["fonction"];

    if ($fonction === "gras") {
        echo "<div class=\"output-text\">" . gras($str) . "</div>";
    } elseif ($fonction === "cesar") {
        echo "<div class=\"output-text\">" . cesar($str) . "</div>";
    } elseif ($fonction === "plateforme") {
        echo "<div class=\"output-text\">" . plateforme($str) . "</div>";
    }
}

?>

<style>

body {
    background-color: #7ad1ddff;
}  

form {
    margin-bottom: 20px;
    background-color: white;
    padding: 10px;
    margin : 10px;
    border-radius: 5px;
    height: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 8px rgba(2, 41, 54, 0.48);
}

input, select, button {
    margin-right: 10px;
    padding: 5px;
    font-size: 16px;
    border-radius: 3px;
    border: 1px solid #ccc;
}

button {
    background-color: #7ad1ddff;
    color: white;
    border: none;
    cursor: pointer;
    box-shadow: 0 4px 8px #064b5475;
}

button:hover {
    background-color: #5aaeb3ff;
}

button:active {
    transform: scale(0.98);
}

.output-text {
    color: white;
    font-size: 25px;
    font-family: Arial, sans-serif;
}

</style>
    
</body>
</html>