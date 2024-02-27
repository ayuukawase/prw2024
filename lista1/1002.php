<?php

    $raio = doubleval(readline());
    $pi = 3.14159;

    $area = $pi * pow($raio,2);

    echo "A=".number_format($area,4,'.','')."\n";

?>