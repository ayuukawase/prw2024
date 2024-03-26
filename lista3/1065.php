<?php

    $contador = 0;

    for ($i = 1; $i <= 5; $i++) {
        $valor = readline();

    if ($valor % 2 == 0) {
        $contador++;
    }
}
    
    echo $contador." valores pares\n";
    
?>