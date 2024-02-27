<?php

    $linha = explode(" ", readline());
    $a = $linha[0];
    $b = $linha[1];
    $c = $linha[2];
    
    $maiorab = ($a + $b + abs($a - $b)) / 2;
    
    $maior = ($maiorab + $c + abs($maiorab - $c)) / 2;
    
    echo $maior." eh o maior\n";

?>