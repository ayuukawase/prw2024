<?php

    list($a, $b, $c) = array_map('floatval', explode(' ', readline()));
    
    //verificando triangulo
    if(($a + $b) > $c and ($a + $c) > $b and ($b + $c) > $a) {
        $perimetro = $a + $b + $c;
        
        echo "Perimetro = ".number_format($perimetro, 1, '.', ' ')."\n";
    } else {
        $area = (($a + $b) * $c) / 2;
        
        echo "Area = ".number_format($area, 1, '.', ' ')."\n";
    }

?>