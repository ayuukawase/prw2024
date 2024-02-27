<?php
    
    $a = floatval(readline());
    $b = floatval(readline());
    $c = floatval(readline());
    $pi = 3.14159;

    $areatri = ($a * $c) / 2;
    $areacir = $pi * pow($c,2);
    $areatra = (($a + $b) * $c) / 2;
    $areaqua = $b * $b;
    $arearet = $a * $b;
    
    number_format($areatri,3,'.','');
    number_format($areacir,3,'.','');
    number_format($areatra,3,'.','');
    number_format($areaqua,3,'.','');
    number_format($arearet,3,'.','');
    
    echo "TRIANGULO: ".$areatri."\n";
    echo "CIRCULO: ".$areatri."\n";
    echo "TRAPEZIO: ".$areatri."\n";
    echo "QUADRADO: ".$areatri."\n";
    echo "RETANGULO: ".$areatri."\n";

?>