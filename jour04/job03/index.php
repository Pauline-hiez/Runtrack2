<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>

    <h1>Formulaire de connexion POST</h1>

    <form method="POST">

        <label>Nom :</label>
        <input type="text" name="nom">

        <label>Prénom :</label>
        <input type="text" name="prenom">

        <input type="submit" value="Valider" class="btn">

    </form><br>

    <?php

    $nb_args = 0;

    foreach ($_POST as $key => $valeur) {
        $nb_args = $nb_args + 1;
    }

    echo "Le nombre de POST envoyés est :  " . $nb_args . "<br><br>"

    ?>

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
            width: 93%;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 4px;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background-color: #058e83ff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #016960ff;
        }

    </style>

    </body>
</html>



