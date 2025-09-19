<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>

    <h1>Formulaire de connexion</h1>

    <form method="GET">

        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required>
        <br><br>

        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
        <br><br>

        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Se souvenir de moi</label>

        <br><br>

        <button type="submit">Se connecter</button>

    </form>

    <br>

    <style>

        h1 {
            text-align: center;
            color: #058e83ff;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 300px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 5px #034c46ff;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #058e83ff;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #058e83ff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #016960ff;
        }

    </style>

</body>
</html>

<?php

$nom = isset($_GET["username"]) ? $_GET["username"] : "Norman";
$mdp = isset($_GET["password"]) ? $_GET["password"] : "Bates";

$nb_args = 0;

foreach ($_GET as $cle => $valeur) {
    $nb_args = $nb_args + 1; 
}

echo "Le nombre d'argument GET envoyé est : " . $nb_args . "<br><br>";

?>
