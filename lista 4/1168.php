<?php
    
    $n = intval(readline());

    $leds = [
        0 => 6,
        1 => 2,
        2 => 5,
        3 => 5,
        4 => 4,
        5 => 5,
        6 => 6,
        7 => 3,
        8 => 7,
        9 => 6
    ];

    for ($i = 0; $i < $n; $i++) {
        $valor = trim(fgets(STDIN));
        $totalleds = 0;

    for ($a = 0; $a < strlen($valor); $a++) {
        $digito = intval($valor[$a]);
        $totalleds += $leds[$digito];
    }

        echo $totalleds." leds\n";
    }
    
?>