<?php
function estPremier($n) {
	if ($n < 2) return false;
	for ($j = 2; $j <= sqrt($n); $j++) {
		if ($n % $j == 0) return false;
	}
	return true;
}

for ($i = 2; $i <= 1000; $i++) {
	if (estPremier($i)) {
		echo $i . "<br />\n";
	}
}
?>
