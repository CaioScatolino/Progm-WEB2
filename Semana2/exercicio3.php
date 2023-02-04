<?php

// 3. Escreva um programa que solicite um número, após ele deve contar o número total de dígitos e mostrar o resultado. Por exemplo 2358 = 4 dígitos - 345 = 3 dígitos.

$numero = readline('Insira um número: ');

$digitos = strlen($numero);

echo "O número de digitos é $digitos";
