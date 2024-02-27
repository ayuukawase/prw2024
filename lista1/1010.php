<?php
    
    $linha = explode(" ", readline());
    $a = $linha[0];
    $b = $linha[1];
    $c = $linha[2];
    $pi = 3.14159;

    $areatri = ($a * $c) / 2;
    $areacir = $pi * pow($c,2);
    $areatra = (($a + $b) * $c) / 2;
    $areaqua = $b * $b;
    $arearet = $a * $b;
    
    echo "TRIANGULO: ".number_format($areatri,3,'.','')."\n";
    echo "CIRCULO: ".number_format($areacir,3,'.','')."\n";
    echo "TRAPEZIO: ".number_format($areatra,3,'.','')."\n";
    echo "QUADRADO: ".number_format($areaqua,3,'.','')."\n";
    echo "RETANGULO: ".number_format($arearet,3,'.','')."\n";
    
?>