<?php

    $parar = false;
    while (!$parar) {
        list($x, $y) = explode(" ", readline());
        if ($x == 0 || $y == 0)
            $parar = true;
        elseif ($x > 0 && $y > 0)
            echo "primeiro\n";
        elseif ($x < 0 && $y > 0)
            echo "segundo\n";
        elseif ($x < 0 && $y < 0)
            echo "terceiro\n";
        elseif ($x > 0 && $y < 0)
            echo "quarto\n";
    }
    
?>