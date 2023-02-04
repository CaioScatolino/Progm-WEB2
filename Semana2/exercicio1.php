<?php

// 1. Escreva um programa que leia o número inicial, leia o número final (número inicial sempre menor que o final) e imprima-os (eles e os números sequenciais até o maior ou menor) na tela, em ordem decrescente. Por exemplo: Menor: 5 - Maior: 10 resultado -> 10, 9, 8, 7, 6, 5

$inicial = readline("Digite o número inicial (número menor): ");
$final = readline("Digite o número final (número maior): ");

if ($final > $inicial) {

  for($i = $final; $i >= $inicial; $i--)

    echo $i . ' ';
  
}else {
  echo "O valor final está menor que o inicial, favor inserir dados corretos";
};

