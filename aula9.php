<?php
// echo "tabuada com função <br><br> ";
function tabuada($tabuada){
    
    for ($numero=0; $numero <=10; $numero++){
        echo "numero: $tabuada x $numero = ".$numero*$tabuada."<br>";
    }

}

// tabuada (5);

// echo "<br>calculadora com função<br><br>";
/*criar uma calculadora utilizando funcoes, recebendo 2 numeros como parametro
operacoes: + - * / e adiciona o percetual %
retornar o valor para o usuario, salvar em uma outra variavel e exibir este valor 
*/

function calculadora ($num1,  $operacao, $num2,){
    $resultado = 0;
    if ($operacao == "+"){
        $resultado = $num1 + $num2;
    
    }elseif ($operacao == "-"){
        $resultado = $num1 - $num2;

    }elseif ($operacao == "*"){
        $resultado = $num1 * $num2;

    }elseif ($operacao == "/"){
        $resultado = $num1 / $num2;
   }elseif ($operacao == "%"){
        $porcentagem = $num1 / 100;
        $resultado = $porcentagem * $num2;
   }
    
   return $resultado;
}

// echo calculadora (10,"%", 50,);

/*
utilizar funções para criar um sistema bancario contendo as seguintes oprações 
depósito, saque, estrato(saldoatual)
*/

echo "<br>simulação de um sistema bancário<br>";

$saldoAtual = 1000;

function caixa ($operacao, $quantiedade, &$saldoAtual){

    if ($operacao == "saque" && ($quantiedade > $saldoAtual || $quantiedade <= 0)){
        return "não é possível sacar ";
    }elseif ($operacao == "saque"){
        $saldoAtual = $saldoAtual - $quantiedade;
    }
    
    if ($operacao == "deposito" && ($quantiedade <= 0 || $quantiedade == '')){
        return "não é permitido depósito em branco";
    }elseif ($operacao == "deposito" ){
        $saldoAtual = $saldoAtual + $quantiedade;
    }
    
    if ($operacao == "extrato"){
        return $saldoAtual;
    }

    return $saldoAtual;
}

// '' || 0

echo caixa("extrato", 0, $saldoAtual); 
echo "<br>";
echo caixa("deposito", 0, $saldoAtual); 
echo "<br>";
echo caixa("saque", -1, $saldoAtual); 





