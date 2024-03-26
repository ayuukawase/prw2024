<?php
    
    $n = intval(readline());

    $dentro = 0;
    $fora = 0;

    for ($i = 1; $i <= $n; $i++) {
        $x = intval(readline());

        if ($x >= 10 and $x <= 20) {
            $dentro++;
        } else {
            $fora++;
        }
    }

    echo $dentro." in\n";
    echo $fora." out\n";

?>