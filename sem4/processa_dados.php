<?php

$nome = $_REQUEST['nome'];
$cidade = $_REQUEST['cidade'] ;
$telefone = $_REQUEST['telefone'];

if($nome && $telefone && $cidade) {
    echo "Seu nome é: $nome, mora em $cidade e utiliza o telefone $telefone";
}else {
    echo "Você não preencheu todos os campos";

    
}



?>
