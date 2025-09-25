<?php

$cookie_name = "prenom";

if (isset($_POST["connexion"]) && !empty($_POST["prenom"])) {
    $prenom = htmlspecialchars($_POST["prenom"]);
    setcookie($cookie_name, $prenom, time() + 3600);
    $_COOKIE[$cookie_name] = $prenom;
}

if (isset($_POST['deconnexion'])) {
    setcookie($cookie_name, "", time() - 3600);
    unset($_COOKIE[$cookie_name]);
}

?>

<?php if (!isset($_COOKIE[$cookie_name])): ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Connexion</title>
</head>
<body>

    <form method="post">
        <input type="text" name="prenom" placeholder="Prénom">
        <button type="submit" name="connexion">Connexion</button>
    </form>

    <?php else: ?>

    
    <form method="post">
        <button type="submit" name="deconnexion">Déconnexion</button>
    </form>  

    <p style="text-align: center; font-weight: bold; font-family: Arial, sans-serif;">Bonjour <?php echo $_COOKIE[$cookie_name]; ?> &#128075;</p>

    <?php endif; ?>

<style>

form {
    display: flex;
    justify-content: center;
    flex-direction: row;
    gap: 10px;  
    margin-top: 20px;
}

input[type="text"] {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

button {
    padding: 10px 20px;
    background-color: #97dddfff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #6ec1c1ff;
}

</style>    
    
</body>
</html>

