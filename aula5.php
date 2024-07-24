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
echo "<br>";
echo "<br> soma dos números impares e numeros pares é igual a:<br>";
echo "Soma dos números pares =  " . $somaPares . "<br>";
echo "Soma dos números ímpares = " . $somaImpares . "<br>";

//outra forma de somar os numeros impares e pares usando o for 
//zera o valor das variaveis usadas anteriormente para não causar um conflito 
$somadospares = 0;
$somadosimpares = 0;

for ($i=1; $i <=100; $i++){
    // aramazenar na variavel o resultado ou resto da sobra da divisão por 2
    $resto = $i%2;
    if ($resto == 0){   
        //echo "o número $i é par " . "<br>"; 
        $somadospares += $i;
    } else {
        //echo "o numero $i é impar<br>";
        $somadosimpares += $i;
    } 
}

echo "<br>";
echo "a soma total dos pares é $somadospares<br>";
echo "a soma total dos impares é $somadosimpares<br>";

//criando um exemplo de laço de repetição dentro de outro 
echo "<br> tabuada um pouco mais complexa<br>";
for ($f=0; $f <=10; $f++){
    echo "<br> tabuada do $f <br>";
    for ($numero=0; $numero <=10; $numero++){
    echo "numero: $f x $numero = ".$numero*$f."<br>";
    }    
}
// calculo de horas vs dias
// 8h por dia trabalhada, contrato de 100h
for($horas=0; $horas <= 100; $horas++){

}
?>
