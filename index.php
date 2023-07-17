<?php
include_once("config/URL.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par/Impar</title>
</head>
<body>
    <h1>Verifique se o numero é par o impar</h1>
    <form action="<?=$BASE_URL?>Process.php/calc.php" method="POST">
<div>
    <label for="numero">Digite aqui o numero:</label>
    <input type="number" name="numero" required>
</div>
<div>
    <button type="submit">Enviar</button>
</div>
    </form>
</body>
</html>


