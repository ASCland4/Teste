<?php

//criando um array



$array = [
    'nome' => 'Aniel',
    'idade' => 19
];

$ar = array_keys($array);

echo '<pre>';
print_r($ar);





exit;
$Conjunto = array('O' => "olá para você", 'I' => "oi", 'C' => "como vai", 'J' => "já vai");

$Conjunto['N'] = "nem te vi";
$Conjunto['T'] = "tchau";
asort($Conjunto);

$elementos = count($Conjunto);
print "Há $elementos formas de inicia uma frase" . "<br/>";


$Conjunto2 = [
    2 => 'teste'
];

if ($Conjunto != $Conjunto2) {
    echo 'diferente';
}
