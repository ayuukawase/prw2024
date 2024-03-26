<?php

    function engracada($sequencia) {
        $vogais = ['a', 'e', 'i', 'o', 'u'];
        $sequencia_vogais = preg_replace('/[^'.implode('', $vogais).']/', '', $sequencia);
    
        return $sequencia_vogais === strrev($sequencia_vogais);
    }

    $entrada = trim(fgets(STDIN));

    if(engracada($entrada)) {
        echo "S\n";
    } else {
        echo "N\n";
    }

?>