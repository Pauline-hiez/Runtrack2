<?php
for ($i = 0; $i <= 100; $i++) {
    $output = $i;
    if ($i == 42) {
        $output = "La Plateforme_";
    }
    if ($i >= 0 && $i <= 20) {
        echo "<i>$output</i><br />\n";
    } elseif ($i >= 25 && $i <= 50) {
        echo "<u>$output</u><br />\n";
    } else {
        echo "$output<br />\n";
    }
}
?>