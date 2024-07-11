<?php
//comando para saber se a pessoa foi aceita para algo
$nome = "David";
$genero = "masculino";
$idade = 15;

if ($genero == "masculino"){
    echo "eceito para o clube de luta $nome ";
}else{
    echo "não aceito para o clube $nome mude seu genero, ";
}

if ($idade >= 15){
    echo "e voce possui a idade correta";
}else{
    echo "mas mano tu não tem idade então esquece";
}

//comando para criar uma lista em ordem decrescente 

for ($i = 10; $i >= 1; $i--){
echo $i . "<br>";
}
?>  
