<?php

session_start();

if (!isset($_SESSION["grid"]) or isset($_POST["reset"])) {
    $_SESSION["grid"] = array_fill(0, 9, "-");
    $_SESSION["player"] = "X";
    $_SESSION["message"] = "";
}

function checkWinner($grid) {
    $win = [
          [0,1,2],
          [3,4,5],
          [6,7,8],
          [0,3,6],
          [1,4,7],
          [2,5,8],
          [0,4,8],
          [2,4,6]  
    ];

    foreach ($win as $combo) {
        [$a, $b, $c] = $combo;
        if ($grid[$a] !== "-" && $grid[$a] === $grid[$b] && $grid[$a] === $grid[$c]) {
        return $grid[$a];
        } 
    }
    return null;
}

if (isset($_POST["case"]) && $_SESSION["message"] === "") {
    $index = (int)$_POST["case"];
    if ($_SESSION["grid"][$index] === "-") {
        $_SESSION["grid"][$index] = $_SESSION["player"];
        $winner = checkWinner ($_SESSION["grid"]);

        if($winner) {
            $_SESSION["message"] = "🏆 $winner a gagné !🏆";
        }
        elseif (!in_array("-", $_SESSION["grid"])) {
            $_SESSION["message"] = "🏅 Match nul 🏅";
        }
        else {
            $_SESSION["player"] = ($_SESSION["player"] === "X") ? "O" : "X";
        }
    }
}

if(isset($_POST["reset"])) {
    $_SESSION["grid"] = array_fill(0, 9, "-");
    $_SESSION["player"] = "X";
    $_SESSION["message"] = "";
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morpion</title>

    <style>

body{
    background: linear-gradient(90deg,rgba(42, 123, 155, 0.43) 0%, rgba(87, 199, 133, 0.52) 50%, rgba(42, 123, 155, 0.38) 100%);
}

h1 {
    text-align: center;
    font-family: arial;
    font-size: 50px;
    color: #04433bff;
    margin: 50px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
    align-content: center;
}

td {
    width: 100px;
    height: 100px;
    text-align: center;
    vertical-align: middle;
    font-size: 50px;
    font-family: Arial, sans-serif;
}

button {
    width: 100%;
    height: 100%;
    font-size: 50px;
    font-family: Arial, sans-serif;
    background-color: white;
    border-radius: 8px;
    cursor: pointer;
    box-shadow: 0 0 5px #04433bff;
    background-color: #7eb6ae05;
}

button:hover {
    background-color: #04433b5d;
}

.reset-button {
    padding: 10px 20px;
    font-size: 20px;
    background-color: #04433bff;
    border: none;
    border-radius: 100%;
    color: white;
    cursor: pointer;
    height: 50px;
    width: 200px;   
    margin: 50px;
    box-shadow: 0 0 5px black;
}

.reset-button:hover {
    background-color: #03251fff;
    border-radius: 100%;
}

table {
    border-collapse: collapse;
    margin-top: 20px;
}

.player-x {
    color: #04433bff;  
    font-weight: bold;
    font-size: 40px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

.player-o {
    color: #1d8471ff;  
    font-weight: bold;
    font-size: 40px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

#message {
    font-family: Arial, sans-serif;
    font-size: 40px;
    font-weight: bold;
    color: #04433bff;
    margin: 40px;
    display: flex;
    justify-content: center;

}

</style>
</head>
<body>

<h1>🟢 Morpion ❎</h1>

<form method="post">
    <table>
        <?php
            for ($row=0; $row<3; $row++) {
                echo "<tr>";
                for ($colonne=0; $colonne<3; $colonne++) {
                $index = $row * 3 + $colonne;
                echo "<td>";
                if ($_SESSION["grid"][$index] === "-") {
                    echo "<button type='submit' name='case' value='$index'>-</button>";
                }
                else {
                    $player = $_SESSION["grid"][$index];
                    $class = ($player === "X") ? "player-x" : "player-o";
                    echo "<span class='$class'>$player</span>";
                }
                echo "</td>";    
                }
                echo "</tr>";
            }

        ?>
    </table>
</form>

<?php if ($_SESSION["message"] !==""): ?>
    <p id="message"><?= $_SESSION["message"]; ?></p>
<?php endif; ?>

<form method="post">
    <button class="reset-button" type="submit" name="reset">Nouvelle partie</button>
</form>



    
</body>
</html>