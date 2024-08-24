<?php
//Matriz é = a linhas e colunas
//$vetor = array();
//$vetor = []; 
echo "números que estão dentro de um vetor<br>";
$vetor =[1, 2, 3, 4, 5]; 
// $i =  0, 1, 2, 3, 4,
$tamanho = count($vetor);//conta a quantidade de valor de uma variavel

for ($i =0; $i < $tamanho; $i++){ //exibe o que está dentro de um vetor 
    echo $vetor[$i] . "<br>";
}
echo "<br>";

//código para exibir os números pares e impares de um determinado vetor
//sem saber qual a quantidade que tem entre determinada condição Ex do 1 até o 100

$vetorPar = [];
$vetorImpar = [];

for ($i =1; $i <= 100; $i++) {
    
    if ($i % 2 == 0){ //valida se o número é par
        $somaDosPares += $i;
        // $vetorPar = array_push($vetorPar, $i);
        $vetorPar[] = $i;
    } else {
        $somaDosImpares += $i;
        //$vetorImpar = array_push($vetorImpar, $i);
        $vetorImpar[] = $i;

    }
}

//Código para percorrer e mostrar o que temos no vetor (na variavel $vetor) usando o indicie  ex o vetor é 2 o indice é 0 
//ex percorrer 2,4,6,8

echo "os números pares de 1 a 100 é: <br>";
for ($i = 0; $i < count($vetorPar); $i++){
    echo $vetorPar[$i]. ", ";
}

echo "<br>";
echo "<br>";

echo "os números ímpares de 1 a 100 é: <br>";
for ($i = 0; $i < count($vetorImpar); $i++){ //count serve para contar a quantiedade de elementos dentro de uma matriz Ex $vetor = [1 ,10] o cout diz que tem dois elementos 
    echo $vetorImpar[$i]. ", ";
}

//Tema inverter a ordem dos códigos que estão em pares e impares de 1 até 100

echo "<br>";

$vetorPar = [];
$vetorImpar = [];

for ($i =1; $i <= 100; $i++) {
    
    if ($i % 2 == 0){ //valida se o número é par
        $somaDosPares += $i;
        // $vetorPar = array_push($vetorPar, $i);
        $vetorPar[] = $i;
    } else {
        $somaDosImpares += $i;
        //$vetorImpar = array_push($vetorImpar, $i);
        $vetorImpar[] = $i;

    }
}

echo "<br>";
echo "<br>";

echo "os números pares de 100 a 1 é: <br>";
for ($i = count($vetorPar); $i >=0; $i--){ //devemos inverter o que está sendo executado começando do 100 até o 0 
    echo $vetorPar[$i]. ", ";
}
echo "<br>";
echo "os números Impares de 100 a 1 é: <br>";
for ($i = count($vetorImpar); $i >=0; $i--){ //devemos inverter o que está sendo executado começando do 100 até o 0 
    echo $vetorImpar[$i]. ", ";
}