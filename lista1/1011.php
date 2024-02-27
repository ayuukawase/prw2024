<?php
    
    $raio = floatval(readline());
    $pi = 3.14159;
    
    $volume = (4 / 3.0) * $pi * pow($raio,3);
    
    echo "VOLUME = ".number_format($volume,3,'.','')."\n";

?>