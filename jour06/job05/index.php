<?php

$style = isset($_POST['style']) ? $_POST['style'] : 'style1';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="<?php echo htmlspecialchars ($style); ?>.css">
</head>
<body>

    <h1>Formulaire</h1>

    <form action="" method="post">

            <label for="username">Utilisateur :</label>
            <input type="text" name="username"><br>

            <label for="password">Mot de passe :</label>
            <input type="password" name="password"><br>

        <label for="style">Choisissez un style :</label><br>

        <select name="style" id="style" class="select">

            <option value="style1" <?php 
            if($style=='style') echo 'selected'; ?>>Style 1</option>

            <option value="style2" <?php 
            if($style=='style2') echo 'selected'; ?>>Style 2</option>

            <option value="style3" <?php 
            if($style=='style3') echo 'selected'; ?>>Style 3</option>

        </select>
        <br><button type="submit">Valider</button>
    </form>


    
</body>
</html>