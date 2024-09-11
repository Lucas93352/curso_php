<?php
/*
Criar objetos as oparações matemáticas + - * / 
*/

// Class OperacaoSoma {
//     public $resultado;
//     public function somar($ValorA, $ValorB ){
//         $this ->resultado = $ValorA + $ValorB;
//     }
// }

// Class Operacaosubtrair {
//     public $resultado;
//     public function subtrair($ValorA, $ValorB){
//         $this ->resultado = $ValorA - $ValorB;
//     }
// }

// Class OperacaoMultiplicar {
//     public $resultado;
//     public function Multiplicar($ValorA, $ValorB){
//         $this ->resultado = $ValorA*$ValorB;
//     }
// }

// class OperacaoDividir {
//     public $resultado;
//     public function dividir($ValorA, $ValorB){
//        $this ->resultado = $ValorA/$ValorB;
//     }
// }

// $operacao = new OperacaoSoma();
// $operacao ->somar (10, 10);
// echo $operacao ->resultado;

// echo "<br>";

// $operacao = new Operacaosubtrair();
// $operacao ->subtrair (10, 10);
// echo $operacao ->resultado;

// echo "<br>";

// $operacao = new OperacaoDividir();
// $operacao ->dividir (10, 10);
// echo $operacao ->resultado;

// echo "<br>";

// $operacao = new OperacaoMultiplicar();
// $operacao ->Multiplicar (10, 10);
// echo $operacao ->resultado;

// echo "<br>";


//recriando o sistema de banco deverá ter todas as operações 

Class Banco{

    public $saldoAtual = 1000;

    public function saque($quantiedade){

        if ($quantiedade <= 0){
            return "O usuário não pode sacar um valor menor que zero";
        }

        if ($quantiedade > $this->saldoAtual){
            return "O usuário não pode sacar um valor maior que o saldo atual";
        }

        $this->saldoAtual -= $quantiedade;
    }

    public function deposito($quantiedade){

        if ($quantiedade <= 0){
            return "O usuário não pode depositar";
        }

        if ($quantiedade == ' ');{
            return "O usuário não pode depositar";
        }

        $this->saldoAtual +=  $quantiedade;
    }

    public function extrato(){
        return $this->saldoAtual;
    }

    public function transferencia($quantiedade, $destinatario){

        if ($quantiedade <= 0){
            return "não é possivel realizar a Transferência";
        }

        if ($quantiedade > $this->saldoAtual){
            return "não é possivel realizr a Transferência";
        }
    
        $this->saldoAtual -= $quantiedade;

        $this->transfCompleta($destinatario, $quantiedade);
    }

    private function transfCompleta($destinatario, $quantiedade) {
        return "Transferência concluída" ;
    }
}

$banco = new Banco();
$banco->saque(100);
echo "Saldo após saque: " . $banco->extrato() . "\n";
echo "<br>";
$banco->deposito(500);
echo "Saldo após depósito: " . $banco->extrato() . "\n";
echo "<br>";
echo $banco->transferencia(200, 'Conta do João') . "\n";
echo "Saldo após transferência: " . $banco->extrato();
echo "<br>";