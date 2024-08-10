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
$lado3 = 3;
echo "<br> descruba qual o tipo de trinagulo:";
echo "<br> lados do triangulo escolhidos pelo o usuário:";
echo "<br> lado 1 = " . $lado1; 
echo "<br> lado 2 = " . $lado2; 
echo "<br> lado 3 = " . $lado3; 
echo "<br>";
echo "O seu tipo de tringulo é um: ";
if ($lado1 == $lado2 && $lado2 == $lado3){
    echo "triangulo equilátero";
}elseif ($lado1 == $lado2 && $lado2 != $lado3 ){
    echo "triangulo isóceles";  
}elseif ($lado1 != $lado2 && $lado2 != $lado3 && $lado1 != $lado3){
    echo "triangulo escaleno";
}elseif ($lado2 == $lado3){
    echo "triangulo isóceles";
}elseif ($lado1 == $lado3){
    echo "triangulo isóceles";
}
