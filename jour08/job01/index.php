<?php

session_start();

if (isset($_POST["reset"])) {
    $_SESSION["nbvisites"] = 0;
}
else {
    if (!isset($_SESSION["nbvisites"])) {
        $_SESSION["nbvisites"] = 1;
    }
else {
    $_SESSION["nbvisites"]++;
    }  
}

echo "<p style=\"color: green; font-weight: bold; font-family: Arial, sans-serif;\">Nombre de visites : ". $_SESSION["nbvisites"] . "</p>";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre de visites</title>
</head>
<body>
    
    <form method="POST">
        <input type="submit" name="reset" value="Reset">
    </form>

</body>
</html>