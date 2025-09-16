<?php
$prenom = "prenom";
$nom = "nom";
$age = "age";

$firstname = "Jon";
$lastname = "Snow";
$ages = 35;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Php</title>
</head>
<body>
    <h1>Informations</h1>
    <table>

        <tr>

            <th><?php echo $prenom; ?></th>
            <th><?php echo $nom; ?></th>
            <th><?php echo $age; ?></th>

        </tr>

        <tr>

            <td><?php echo $firstname; ?></td>
            <td><?php echo $lastname; ?></td>
            <td><?php echo $ages; ?></td>

        </tr>

    </table>
</body>
</html>