<?php

// 5. Escreva um programa que permita ao usuário inserir os valores dos produtos comprados por um cliente. O programa deve terminar quando o usuário inserir o valor 0. Se o usuário digitar um valor negativo não deve ser processado e um novo valor deve ser solicitado como entrada. Ao final, informe o valor total a pagar, lembrando que, caso as vendas ultrapassem o total de R$ 1.000,00, deverá ser aplicado um desconto de 15%.

$soma = 0;

while(True) {

  $valor = readline ("Insira o valor do produto ou 0 para parar: ");
  
    if($valor == 0) {
    break;
  }

    if($valor < 0) {
      echo "Valor negativo não é processado, favor inserir novo valor.\n";
      $valor = readline ("Insira o valor do produto ou 0 para parar: ");
      if($valor == 0) {
      break;
      }
    }

  $soma += $valor;

  if($soma > 1000) {

    $soma = $soma*0.85;
  } 
}

echo "O valor total da compra é: $soma reais";
