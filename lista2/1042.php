<?php

    list($v1, $v2, $v3) = array_map('intval', explode(' ', readline()));
    
    $numeros = array($v1, $v2, $v3);
    
    sort($numeros);
    
    foreach($numeros as $numero) {
        echo $numero."\n";
    }
    
    echo "\n";
    
    echo $v1,"\n";
    echo $v2,"\n";
    echo $v3,"\n";

?>