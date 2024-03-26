<?php

    $x = intval(readline());
    $y = intval(readline());
    $soma = 0;
    $y++;
    while ($y < $x) {
        if ($y % 2 != 0)
            $soma += $y;
        $y++;
    }
    echo $soma . "\n";
    
?>