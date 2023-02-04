<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semana 01 PWII</title>
</head>
<body>


<?php

$idade = readline("Digite sua idade:");
$alfabetizado = readline("Você é alfabetizado? (Digite 'A' para SIM e 'B' para NÃO)");


$resultado1 = ($idade < 16) ? "você não pode votar" : (($idade >= 18 && $idade <= 70) ? "seu voto é obrigatório" :
"seu voto é facultativo");

$resultado2 = ($alfabetizado == "A") ? "Alfabetizado - Voto Obrigatório": "Analfabeto - Voto é facultativo";

echo "Conforme sua resposta: <br>";
echo "Pela sua idade ". $resultado1 . "<br>";
echo "Você é " . $resultado2


?>

    
</body>
</html>