<?php

$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";

$dic = [
    "voyelles" => 0,
    "consonnes" => 0
];

$voyelles = ['a','e','i','o','u','y','à','â','ä','é','è','ê','ë','ï','î','ô','ö','ù','û','ü'];

$str_lower = mb_strtolower($str);

for ($i = 0; $i < mb_strlen($str_lower); $i++) {
    $char = mb_substr($str_lower, $i, 1);

    if (ctype_alpha($char)) { // On ne compte que les lettres
        if (in_array($char, $voyelles)) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table>

        <tr>
            <th>Voyelles</th>
            <th>Consonnes</th>
        </tr>
        <tr>
            <td><?= $dic["voyelles"]; ?></td>
            <td><?= $dic["consonnes"]; ?></td>
        </tr>

    </table>
    
</body>
</html>