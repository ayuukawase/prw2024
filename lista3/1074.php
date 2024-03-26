<?php

    $n = intval(readline());

    for($i = 1; $i <= $n; $i++) {
        $x = intval(readline());
        
    if($x == 0) {
        echo "NULL\n";
    } elseif($x % 2 == 0) {
        echo "EVEN ";
    } else {
        echo "ODD ";
    }

    if($x > 0) {
        echo "POSITIVE\n";
    } elseif($x < 0) {
        echo "NEGATIVE\n";
    }
}

?>