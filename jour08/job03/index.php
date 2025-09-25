<?php

session_start();

if(isset($_POST["reset"])) {
    $_SESSION["prenom"] = [];
}
if(isset($_POST["prenom"]) && $_POST["prenom"] !== "") {
    if(!isset($_SESSION["prenom"])) {
        $_SESSION["prenom"] = [];
    }

    $_SESSION["prenom"][] = htmlspecialchars($_POST["prenom"]);
}

$prenom = isset($_SESSION["prenom"]) ? $_SESSION["prenom"] : [];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire prénoms</title>
</head>
<body>

    <form method="post">

        <input type="text" name="prenom">
        <button type="submit">Envoyer</button>
        <button type="submit" name="reset">Reset</button>

    </form>

    <ul>
        <?php foreach ($prenom as $p): ?>
            <li><?php echo $p; ?></li>
        <?php endforeach; ?>
    </ul>

<style>

form{
    display: flex;
    flex-direction: row;
    width: 200px;
    gap: 10px;  
}

input, button{
    padding: 5px;
    border-radius: 5px;
    border: 1px solid black;
    font-size: 16px;
}

button{
    background-color: lightblue;
    cursor: pointer;
}

button:hover{
    background-color: deepskyblue;
    color: white;
}

li {
    font-family: Arial, sans-serif;
    font-size: 15px;
    weight: bold;
}

</style>    
    
</body>
</html>