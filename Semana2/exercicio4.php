<?php

//4. Escreva um programa que leia n números inteiros a partir do teclado, até que o usuário digite 0 (para parar a somatória). Ao final, mostre a soma de todos os números digitados.

$soma = 0;

while (True) {

  $numero = readline("Digite um número inteiro para somar e 0 para parar: ");

  $soma += $numero;

  if($numero == 0) {
    break;
  };


  
};

echo "A soma dos números digitados é: $soma";
