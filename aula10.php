<?php

/*
criar duas funções (separads) onde cada uma recebe um parametro (string)
e retorna um valor boolean (true || false, 0 || 1).
Objetivo: validar cpf, cnpj
Sujestão/dica para o nome da função: isValidCPF, isValidCNPJ.
*/

$cpf = '046.676.440.52'

function cpf($cpf){
    $cpf = preg_replace("/[^0-9]/", "", $cpf);
    $digitoUm = 0;
    $digitoDois = 0;

    for($i = 0, $x = 10; $i <= 8; $i++, $x--){
        $digitoUm += $cpf[$i] * $x;
    }   
    for($i = 0, $x = 11; $i <=9; $i++, $x--){
        $digitoDois += $cpf[$i] * $x;
    }
    $calculoUm = ($digitoUm * 10) % 11;
    if ($calculoUm >= 10) {
        $calculoUm = 0;
    }
        
    } 
