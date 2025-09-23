<?php

// Avec fonction système

// function occurences($str, $char) {
//     return substr_count($str, $char);
// }

// echo "Le nombre d'occurences est : " . occurences("Honolulu", "u");
// echo "<br>" ;
// echo "Le nombre d'occurences est : " . occurences("Antalaya", "a");



// Sans fonction système

function occurences($str, $char) {
    
    $count = 0;
    $lenght = 0;

    while (isset($str[$lenght])) {
        $lenght++;
    }

    for ($i = 0; $i < $lenght; $i++) {
        if ($str[$i] === $char) {
            $count++;
        }
    }

    return $count;
    
    }

echo "Le nombre d'occurences est : " . occurences("Italie", "i"); 
echo "<br>" ;
echo "Le nombre d'occurences est : " . occurences("Honolulu", "u");
echo "<br>" ;
echo "Le nombre d'occurences est : " . occurences("Antalaya", "a");

?>