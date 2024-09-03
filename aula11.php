<?php
 
 //Objetivo: criar uma mascara para um número de telefone
 
 function validartelefone ($telefone){
    $ddd = array(11, 12, 13, 14, 15, 16, 17, 18, 19, 21, 22, 24, 27, 28, 31, 32, 33, 34, 35, 37, 38, 41, 42, 43, 44, 45, 46, 47, 48, 49, 51, 53, 54, 55, 61, 62, 63, 64, 65, 66, 67, 68, 69, 71, 73, 74, 75, 77, 79, 81, 82, 83, 84, 85, 86, 87, 88, 89, 91, 92, 93, 94, 95, 96, 97, 98);

    $telefone = preg_replace("/[^0-9]/", "", $telefone); // somente numeros 5554987654321 

    $pais = substr($telefone, 0, 2);
    $dddTelefone = substr($telefone, 2, 2);
    $dddValido = in_array($dddTelefone, $ddd);
    
    if (strlen($telefone) == 13 && $pais == "55" && $dddValido) {
        return true;
    }
    
    return false;
 }

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
  
$telefone = '+55 (54) 13455789';
$resultado =  validartelefone($telefone);
$telefone = preg_replace("/[^0-9]/", "", $telefone);
$telefone = Mascktelefone($telefone);   

if ($resultado) {
    echo "O telefone: " . $telefone . " é valido";
} else {
    echo "O telefone: " . $telefone . " é <b> invalido <b>";
}
