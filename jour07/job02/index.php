<?php

$message = bonjour(true);

function Bonjour($jour) {
    if ($jour) {
        return "Bonjour";   
    } else {
        return "Bonsoir";
    }
}

echo $message;

?>