<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Rambo</title>
</head>
<body>

<form method="POST">

    <label for="username">Utilisateur</label>
    <input type="text" name="username">
    <br><br>

    <label for="password">Mot de passe</label>
    <input type="password" name="password">
    <br><br>

    <button>Valider</button>

</form>

<style>

    body {
      font-family: Arial, sans-serif;
      background: #f7f7f7;
      padding: 20px;
    }

    form {
      margin-bottom: 20px;
      padding: 20px;
      border: 5px solid #0d9e8bff;
      border-radius: 5px;
      background: white;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    button {
        background-color : #0d9e8bff;
        border-radius : 5px;
        padding : 10px;
        color : white;
        font-size : 15px;
        box-shadow : 10px;
        box-shadow: 0 0 5px #011a17ff;
    }

    button:hover {
        background-color : #06463eff;
    }

</style>
  

<?php 

$username = "John";
$password = "Rambo";

if (isset($_POST['username']) && isset($_POST['password']))
     {
    if ($_POST['username'] == $username && $_POST['password'] == $password) {
        echo "C'est pas ma guerre";
    } else {
        echo "Votre pire cauchemard";
    }
}

?>

</body>
</html>