<?php


?>

<?php

$numero = $_POST["numero"];

if($numero % 2 === 0){
    $resultado = "O numero $numero é par";
} else{
    $resultado = "O numero $numero é impar";
}

echo $resultado ;

?>