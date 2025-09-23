<?php

function calcule($a, $operation, $b) {
    switch ($operation) {
        case "+";
            return $a + $b;

        case "-"; 
            return $a - $b;
            
        case "*";
            return $a * $b; 
            
        default:
            return "Opération inconnue";    
    }
}

echo calcule(5, "+", 8);
echo "<br>";
echo calcule(8, "*", 7);
echo "<br>";
echo calcule(89, "-", 45);

?>