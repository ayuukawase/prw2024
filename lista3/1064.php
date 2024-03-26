<?php

    $contador = 0;
    $soma = 0;

    for ($i = 1; $i <= 6; $i++) {
        $valor = readline();

    if ($valor > 0) {
        $contador++;
        $soma += $valor;
    }
}
    
    echo $contador." valores positivos\n";
    
    $media = $soma / $contador;
    
    echo number_format($media, 1, '.', '')."\n";

?>