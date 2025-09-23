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
    $i = 0;

    while (true) {

        if (!isset($str[$i])) {
        break;
    }

        if ($str[$i] === $char) {
        $count++;
    }

        $i++;
    
    }

    return $count;

}

echo "Le nombre d'occurences est : " . occurences("Italie", "i"); 
echo "<br>" ;
echo "Le nombre d'occurences est : " . occurences("Honolulu", "u");
echo "<br>" ;
echo "Le nombre d'occurences est : " . occurences("Antalaya", "a");

?>