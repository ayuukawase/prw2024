<?php
    
    $numfunc = intval(readline());
    $numhoras = intval(readline());
    $valor = floatval(readline());
    
    $salario = $numhoras * $valor;
    
    echo "NUMBER = ".$numfunc."\n";
    echo "SALARY = U$ ".number_format($salario,2,'.','')."\n";

?>