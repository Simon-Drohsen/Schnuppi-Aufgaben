<?php

if (isset($_POST["operator"])) {
    switch ($_POST["operator"]) {
        case '+':
            $result = $_POST["firstOperand"] + $_POST["secondOperand"];
            break;
        case '-':
            $result = $_POST["firstOperand"] - $_POST["secondOperand"];
            break;
        case '*':
            $result = $_POST["firstOperand"] * $_POST["secondOperand"];
            break;
        case '/':
            $result = $_POST["firstOperand"] / $_POST["secondOperand"];
            break;
    }
} else {
    $result = 0;
}
?>

<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <title>Calculator</title>
    </head>

    <body>
        <form action="aufgabe_5.php" method="post">
            <input type="number" name="firstOperand" value=""/>
            <input type="number" name="secondOperand" value=""/>

            <div>
                <button type="submit" name="operator" class="operator" value="+">+</button>
                <button type="submit" name="operator" class="operator" value="-">-</button>
                <button type="submit" name="operator" class="operator" value="*">&times;</button>
                <button type="submit" name="operator" class="operator" value="/">&divide;</button>
            </div>
        </form>
        <p>Resultat: <?=$result?></p>
    </body>
</html>

