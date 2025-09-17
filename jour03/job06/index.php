<?php

$str = "Les choses que l'on possède finissent par nous posséder.";

function mb_strrev($string){

    $length = mb_strlen($string);
    $reversed = '';
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= mb_substr($string, $i, 1);
    }
    return $reversed;
}

echo mb_strrev($str);

?>  
