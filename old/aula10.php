<?php

/*
criar duas funções (separads) onde cada uma recebe um parametro (string)
e retorna um valor boolean (true || false, 0 || 1).
Objetivo: validar cpf, cnpj
Sujestão/dica para o nome da função: isValidCPF, isValidCNPJ.
*/

function validarCPF($cpf){
    // código para remover o q não for numero 
    $cpf = preg_replace("/[^0-9]/", "", $cpf);
     // Verifica se o CPF tem exatamente 11 dígitos
     if (strlen($cpf) != 11) {
        return false;
    }

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

    }$calculoDois = ($digitoDois * 10) % 11;
    if ($calculoDois >= 10) {
        $calculoDois = 0;
        
    } 
 
    if ($calculoUm == $cpf[9] && $calculoDois == $cpf[10]){
        return true;
    }else{
        return false;
    }
}
  
function addMasckCPF($cpf){
    $CPFMasck = "";
    $masckCPF = "###.###.###-##"; // ###.###.###.## => 12345678910

    $j = 0;

    for ($i= 0; $i < strlen($masckCPF); $i++){

        if ($masckCPF[$i] == '#') {
            $CPFMasck .= $cpf[$j]; // "1" => "123"
            $j++;
        } else {
            $CPFMasck .= $masckCPF[$i]; // 123.
        }
    }

    return $CPFMasck;
}

    
    $cpf = '730.426.500-04';
    $resultado = validarCPF($cpf);
    $cpf = preg_replace("/[^0-9]/", "", $cpf);
    $cpf = addMasckCPF($cpf);
    
    if ($resultado) {
        echo "O CPF: " . $cpf . " é valido";
    } else {
        echo "O CPF: " . $cpf . " é invalido";
    }
    
    



    //validador de CNPJ

    function validarCNPJ($cnpj){
        $cnpj = preg_replace("/[^0-9]/", "", $cnpj);
        
        if (strlen($cnpj) != 14) {
            return false;
        }
        $digitoUm = 0;
        $digitoDois = 0;
        for ($i = 5, $x = 9, $n = 0; $n <= 11 ; $n++) {
            if ($i >= 2) {
                $digitoUm += $cnpj[$n] * $i;
                $i--;
            } else {
                $digitoUm += $cnpj[$n] * $x;
                $x--;
            }
        }
        $resto = $digitoUm % 11;
        $digitoUm = $resto < 2 ? 0 : 11 - $resto;
        
        for ($i = 6, $x = 9, $n = 0; $n <= 12; $n++) {
            if ($i >= 2) {
                $digitoDois += $cnpj[$n] * $i;
                $i--;
            } else {
                $digitoDois += $cnpj[$n] * $x;
                $x--;
            }
        }
        $resto = $digitoDois % 11;
        $digitoDois = $resto < 2 ? 0 : 11 - $resto;
        if ($digitoUm == $cnpj[12] && $digitoDois == $cnpj[13]) {
            return true;
        } else {
            return false;
        }
    }

function addMasckCNPJ ($cnpj){
    $cnpjMasck = "";
    $masckCNPJ = "###.###.###-##"; // ###.###.###.## => 12345678910

    $j = 0;

    for ($i= 0; $i < strlen($masckCNPJ); $i++){

        if ($masckCNPJ[$i] == '#') {
            $cnpjMasck .= $cnpj[$j]; // "1" => "123"
            $j++;
        } else {
            $cnpjMasck .= $masckCNPJ[$i]; // 123.
        }
    }

    return $cnpjMasck;
}

echo "<br>";
$cnpj = "08.199.996/0066-73";
$cnpj = preg_replace("/[^0-9]/", "", $cnpj);
$resultado = validarCPF($cnpj);
$cnpj = addMasckCNPJ ($cnpj);
    if ($resultado) {
        echo "O CPF: " . $cnpj . " é valido";
    } else {
        echo "O CPF: " . $cnpj . " é invalido";
    }
   
