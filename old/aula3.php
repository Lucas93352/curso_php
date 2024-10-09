<?php
$nome = "Lucas";
$sobrenome = "Top";
echo "ola ".$nome. " ".$sobrenome."!<br>";

echo "<br>quantidde de caracteres<br>";
echo "seu nome possui <br>";
echo strlen($nome); //conta a quantidade de carcteres//
echo "<br>seu sobrenome possui <br>";
echo strlen($sobrenome);
echo strtoupper($nome); //letra maiuscula//
echo strtolower($nome); //letra minuscula//
echo strrev("Lucas"); //escreve ao contrario//
echo "<br>";

echo "tudo sobre a data atual<br>";
echo date("d/m/Y");
echo "<br>";
echo date("H:i:s");
echo "<br>";
echo date("d/m/Y H:i:s A");
echo date("w");//0 domingo - 6 sábado
// crie uma variavel para armazenar o valor da função date("w")
// utilize IF para validadar qual é o dia da semana e exibir para
// o usuoario, sendo que 0 é domingo, e 6 é sabado
echo "<br>";
$data = date("w"); 

if($data == 0){
    echo "domingo";
}elseif($data == 1){
    echo "segunda";
}elseif($data == 2){
    echo "terça";
}elseif($data == 3){
    echo "quarta";
}elseif($data == 4){
    echo "quinta";
}elseif($data == 5){
    echo "sexta";
}elseif($data == 6){
    echo "sabado";
}
echo "<br>";
echo "<br>";
switch ($data){
    case 0:
        echo "é domingo";
        break;
    case 1: 
        echo "é segunda";
        break;
    case 2:
        echo "é terça";
        break;
    default:
    //se chegou aqui pq não casou com um valor
    break; 
    }
for ($i=0; $i < 10 ; $i++) {
    echo $i;
}
?>