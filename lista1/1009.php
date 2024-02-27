<?php
    
    $nome = readline();
    $salariofixo = floatval(readline());
    $vendas = floatval(readline());
    
    $calculo = $salariofixo + ($vendas * 0.15);
    
    echo "TOTAL = R$ ".number_format($calculo,2,'.','')."\n";

?>