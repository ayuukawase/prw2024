<?php

    $contadorpar = 0;
    $contadorimpar = 0;
    $contadorpositivo = 0;
    $contadornegativo = 0;

    for($i = 1; $i <= 5; $i++) {
        $valor = readline();

    if($valor % 2 == 0) {
        $contadorpar++;
    }
    if($valor % 2 != 0) {
        $contadorimpar++;
    }
    if($valor > 0) {
        $contadorpositivo++;
    }
    if($valor < 0) {
        $contadornegativo++;
    }
}
    
    echo $contadorpar." valor(es) par(es)\n";
    echo $contadorimpar." valor(es) impar(es)\n";
    echo $contadorpositivo." valor(es) positivo(s)\n";
    echo $contadornegativo." valor(es) negativo(s)\n";
    
?>