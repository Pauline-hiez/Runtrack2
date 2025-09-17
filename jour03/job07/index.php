<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$len = mb_strlen($str);

$newStr = '';

for ($i = 0; $i < $len; $i++) {

    if ($i < $len - 1) {
        $newStr .= mb_substr($str, $i + 1, 1);
    } else {
        $newStr .= mb_substr($str, 0, 1);
    }
}

echo $newStr;

?>
