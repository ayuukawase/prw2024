<?php

    $contador = 0;

    for ($i = 1; $i <= 6; $i++) {
        $valor = readline();

    if ($valor > 0) {
        $contador++;
    }
}
    
    echo $contador." valores positivos\n";

?>