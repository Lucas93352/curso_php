<?php

//array para exibir corretemente a ordem alfabetica 

echo "código para exibir em ordem alfabetica usando array e bubble sort: <br>";

$vetor = array("g", "d", "b", "a", "c");

$tamanho = count($vetor);

$maxindice = $tamanho - 1;

for ($i = 0; $i < $maxindice; $i++) {

    $maxIndice_J = $tamanho - $i - 1;

    for ($j = 0; $j < $maxIndice_J; $j++) {

        if ($vetor[$j] > $vetor[$j + 1]) {
            // Troca os elementos para ordenar corretamente
            $temp = $vetor[$j];
            $vetor[$j] = $vetor[$j + 1];
            $vetor[$j + 1] = $temp;
        }
    }
}

echo implode(", ", $vetor);

/*
 Identificar o tipo de tringulo conforme os dados passados pelo usuário 
 sendo tres medidas $a, $b, $c.
 com essas medidas efetuar o calculo e informar ao usuário qual tipo
 de triangulo que é formado pelas medidas que ele passou

 triangulos a cosiderar: equilátero, Isoceles ou escaleno.
*/

echo "<br>";

$lado1 = 1;
$lado2 = 2;
$lado3 = 1;

if ($lado1 = $lado2 = $lado3){
    echo "triangulo equilátero";
}elseif ($lado1 > $lado2){
    echo "triangulo isóceles";  
}

