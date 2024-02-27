<?php

$nome = $_GET['nome'];
$idade = $_GET['idade'];
$salario = $_GET['salario'];

/*calculo inss*/
if($salario <= 1412) {
    $faixa1 = $salario * 0.075;
}
if($salario <= 2666) {
    $faixa2 = $salario * 0.09;
}
if($salario <= 4000) {
    $faixa3 = $salario * 0.12;
}
if($salario <= 7786) {
    $faixa4 = $salario * 0.14;
}

/*calculo irpf*/
if($faixa1 <= 2259) {
    $irpf1 = $faixa1;
}
if($faixa2 <= 2826) {
    $irpf2 = $faixa2 * 0.0750;
}
if($faixa3 <= 2751) {
    $irpf3 = $faixa3 * 0.2250;
}
if($faixa4 >= 4664) {
    $irpf4 = $faixa4 * 0.2750;
}

/*imposto final*/


?>