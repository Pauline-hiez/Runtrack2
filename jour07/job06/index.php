<?php

function leetSpeak($str) {
    $resultat = "";

    $i = 0;
    while (isset($str[$i])) {
        $char = $str[$i];

        $maj = $char;
        if ($char >= "a" && $char <= "z") {
            $maj = chr(ord($char) - 32);
        }

        if ($maj === "A") $resultat .= "4";
        elseif ($maj === "B") $resultat .= "8";
        elseif ($maj === "E") $resultat .= "3";
        elseif ($maj === "G") $resultat .= "6";
        elseif ($maj === "L") $resultat .= "1";
        elseif ($maj === "S") $resultat .= "5";
        elseif ($maj === "T") $resultat .= "7";

        else $resultat .= $char;

        $i++;
    }

return $resultat;

}

echo leetSpeak("LaPlateforme");

?>