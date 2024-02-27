<?php

    $linha1 = explode(" ", readline());
    $x1 = $linha1[0];
    $y1 = $linha1[1];

    $linha2 = explode(" ", readline());
    $x2 = $linha2[0];
    $y2 = $linha2[1];

    $distancia = sqrt(pow(($x2 - $x1),2) + pow(($y2 - $y1),2));

    echo number_format($distancia,4,'.','')."\n";

?>