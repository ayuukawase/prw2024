<?php
    
    $n = intval(readline());

    for($i = 1; $i <= $n; $i++) {
        if($i % 2 == 0) {
            $calculo = $i * $i;
            echo $i."^2 = ".$calculo."\n";
        }
    }

?>