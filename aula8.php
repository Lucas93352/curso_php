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
