<?php

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
        <p>Resultat:</p>
    </body>
</html>

