<?php
$numero = 9;
$c = 0;

while ($c <=10)
{
    echo  "$numero x $c = " . $numero * $c . "<br>";
    $c++;
}
// o do-while sempre vai excutar uma primeira vez por causa do "do" significando faça                       

/*mostrar os numeros pares de 2 até 20;
utilizar os lacos while e for;
*/
echo "<br>";
for ($i = 2; $i <=20; $i++){
    $resto = $i%2;
    if ($resto == 0){   
        echo $i . "<br>"; 
    }
}
    
echo "<br>";
//usando o while 
$o = 2;
while ($o <=20)
{
    $resto = $o%2;//todo numero dividido por 2 e resto for zero é par 
    if ($resto == 0){
        echo $o . "<br>"; 
    }
    $o++;
}
echo "<br>";
//somar todos os numeros de 0 até 100 com o while e mostar o resultado da soma 
//0 + 1 =1
//1 + 2 =3
//3 + 3 =6

$i = 1;
$soma = 0;
while ($i <=100){
 $soma = $soma + $i;
 $i++;
}
echo "a soma de 1 até 100 é " . $soma;
/*
somar todos os numeros pares de 1 - 100
somar todos os numeros impares de 1 - 100
utilizando o laco de repetição while
apos, mostrar o resultado da soma desses numeros;
ex: 
soma pares = 
soma impares = 
*/

$numero = 1;
$somaPares = 0;
$somaImpares = 0;

while ($numero <= 100) {
    if ($numero % 2 == 0) {
     
        $somaPares += $numero;
    } else {
        
        $somaImpares += $numero;
    }
    $numero++;
}
echo "Soma dos números pares =  " . $somaPares . "<br>";
echo "Soma dos números ímpares = " . $somaImpares . "<br>";

?>
