<?php

$nome = "Lucas Tomazini";
$idade = 18;
$cidade = "Bento Gonçalves";
echo "seja bem vindo $nome à sua cidade $cidade";

echo "<br>";

if ($idade >= 18){
    echo "o $nome é maior de idade!";
}else{
    echo "o $nome, não pode ser preso";
}

echo "<br>";
echo "super calculadora TOP";
echo "<br>";
echo "<br>";
$valorA = 74;
$valorB = 69;
$operacao = "adicao";
$resultado = "";

if($operacao == "soma" || $operacao == "adicao"){
    $resultado = $valorA + $valorB;
}elseif ($operacao == "subtrair" || $operacao == "menos"){
    $resultado = $valorA - $valorB;
}elseif ($operacao == "multiplicação" || $operacao == "vezes"){
    $resultado = $valorA * $valorB;
}elseif ($operacao == "divisão"){
    $resultado = $valorA / $valorB;
}else{
    echo "erro fatal desinstale o app<br>
    só é aceito os seguintes parametros<br>
    soma<br>
    multiplicar<br>
    divisão<br>
    subtrair<br>";
}

if($resultado != ""){
echo "<br>";
echo "A operação escolhida foi $operacao com os valores $valorA e $valorB e o resultado é $resultado e funcionou :)";
}

// Testa se a pessoa pode fazer a carteira de motorista 
// Precisa ser maior de 18 anos, e ter mais de R$1.000,00
$idadePessoa = 5;
$dinheiroNaCarteira = 1000;
 
if($idadePessoa >= 18 && $dinheiroNaCarteira >= 1000){
    echo "<br>";
    echo "Tu pode fazer a carteira meu nobre";
}elseif ($idadePessoa <18 && $dinheiroNaCarteira <1000){
    echo "sem dinherio e idade";
}elseif ($idadePessoa >18 && $dinheiroNaCarteira <1000){
    echo "sem dinheiro";
}elseif ($idadePessoa <18 && $dinheiroNaCarteira >1000){
    echo "sem idade"; 
}
?>