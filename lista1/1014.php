<?php

    $distancia = intval(readline());
    $combustivel = floatval(readline());

    $calculo = $distancia / $combustivel;

    echo number_format($calculo,3,'.','')." km/l\n";

?>