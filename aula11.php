<?php
 
 //Objetivo: criar uma mascara para um número de telefone

 function Mascktelefone ($telefone){
    $telefoneMasck = "";
    $masckTelefone = "+## (##) #########";
    $j = 0;

    for ($i= 0; $i < strlen($masckTelefone); $i++){

        if ($masckTelefone[$i] == '#') {
            $telefoneMasck .= $telefone[$j]; // "1" => "123"
            $j++;
        } else {
            $telefoneMasck .= $masckTelefone[$i]; // 123.
        }
    }

    return $telefoneMasck;
}

echo Mascktelefone ("5555555555555");
