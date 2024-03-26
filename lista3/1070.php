<?php

    $contador = 0;
    $x = intval(readline());

    while ($contador < 6) {
    if ($x % 2 != 0) {
        echo $x."\n";
        $contador++;
    }
    $x++;
    }
    
?>