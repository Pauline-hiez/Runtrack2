<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau</title>
</head>
<body>

<table>

        <tr>
            <th>Nom</th>
            <th>Prénom</th>
        </tr>

        <tr>
<?php 

foreach ($_GET as $key=>$valeur) :
?>
            <td><?= $valeur;?></td>
<?php endforeach; ?>

        </tr>

        <tr>
            <td>Bates</td>
            <td>Norman</td>
        </tr>
        
        <tr>
            <td>Durden</td>
            <td>Tyler</td>
        </tr>

        <tr>
            <td>Dumbledore</td>
            <td>Albus</td>

    </table><br>


<?php 

// $td = "";

// foreach ($_GET as $key=>$valeur)
// {

// $td .="<td>$valeur</td>"; 

// }

// $tr = "<tr>$td</tr>";

// echo $tr;




?>




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

</body>
</html>

<style>
    table {
        width: 100%;
        border-collapse: collapse;
        box-shadow: 0 0 5px #011a17ff;
    }

    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: center;
        font-family: lucida sans;
    }

    th {
        background-color: #b6f0e4c0;
    }

    form {
        max-width: 300px;
        margin: auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 5px #034c46ff;
        font-family: lucida sans;
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








