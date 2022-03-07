<?php
// introducir 5 valores y que imrima cuales y cuantos de esos 5 valores pares y cuales son impares
// LUIS GABRIEL GARCIA VERA 01/03/22
 echo '<!DOCTYPE html>';
 echo '<html lang="en">';
 echo '<head>';
 echo '<meta charset="UTF-8">';
 echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
 echo    '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
 echo   '<title>2</title>';
 echo '</head>';
 echo '<body>';
 echo '<form method="POST">';
 echo   '<h1>valores php</h1>';
 echo   '<br>';
 echo   '<h3>teclea un valor:</h3>';
 echo   '<input type="text" name="valor1">';
 echo   '<br>';
 echo   '<h3>teclea un valor:</h3>';
 echo   '<input type="text" name="valor2">';
 echo   '<br>';
 echo   '<h3>teclea un valor:</h3>';
 echo   '<input type="text" name="valor3">';
 echo   '<br>';
 echo   '<br>';
 echo   '<input type="submit" name="submit" value="comparar datos">';
 echo   '<br>';
 echo '</form>';
 echo '</body>';
 echo '</html>';


if(isset($_POST["submit"]) && !empty($_POST["submit"])) {

    $v1 = $_POST["valor1"];
    $v2 = $_POST["valor2"];
    $v3 = $_POST["valor3"];

    if (($v1>$v2) AND ($v1>$v3))

    echo $v1. ' es el numero mayor';

    else if (($v2>$v1) AND ($v2>$v3))
    echo $v2. ' es el numero mayor';

    else if (($v3>$v1) AND ($v3>$v2))
    echo $v3. ' es el numero mayor';
} ?>