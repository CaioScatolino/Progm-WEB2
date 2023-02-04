<?php

// 2. Escreva um programa que solicite um número de 1 a 10 e imprima a sua tabuada, baseado no número final digitado(inclusive). Por exemplo: Digite o valor da tabuada: 5, depois digite o valor final 15. O resultado será 0,5,10,15,20,25,30,35,40,45,50,55,60,65,70,75.

$numero = readline ("Insira um número de 1 a 10: ");
$final = readline("Insira o último número da tabuada: ");

  if($numero > 10 || $numero < 1) {

    echo 'O número precisa ser de 1 a 10';
  }else {

    for ($i = 0; $i <= $final; $i++)

      echo $numero * $i . ' ';
    
  };