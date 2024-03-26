<?php

    $posicao = 0;
    $num = 0;
    for ($i = 1; $i <= 100; $i++) {
        $valor = intval(readline());
        if ($num < $valor) {
            $num = $valor;
            $posicao = $i;
        }
    }
    
    echo "$num\n";
    echo "$posicao\n";
    
?>